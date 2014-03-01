<?php if (!defined('THINK_PATH')) exit();?><div class="panel panel-primary" id="div_map" style="margin-bottom:0px;">
    <div class="panel panel-heading" style="margin-bottom:0px; height:40px;">
        <h3 class="panel-title" style="float:left;">转移地图展示</h3>
        <button type="button" class="btn btn-default btn-xs" id="toFullScreen" onclick="toFullScreen(); fullScreen=1;" style="float:right;">全屏</button>
        <div id="exitFullScreen" style="display:none; float:right;">
            <button type="button" class="btn btn-default btn-xs" id="showSidebar" onclick="showSidebar();">
                <span class="glyphicon glyphicon-chevron-left"></span>显示右侧边栏
            </button>
            <button type="button" class="btn btn-default btn-xs" id="hideSidebar" onclick="hideSidebar();" style="display:none">
                <span class="glyphicon glyphicon-chevron-right"></span>隐藏右侧边栏
            </button>
            <button type="button" class="btn btn-default btn-xs" onclick="exitFullScreen(); fullScreen=0;">退出全屏</button>
        </div>
    </div>
    <div class="panel panel-body" id="map_parent" style="margin-bottom:0px;">

        <div id="div_input-group">
            <div id="myAlert"></div>
            <div class="row" style="position:absolute; z-index:1;">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">当偏移距离大于</span>
                        <input type="text" class="form-control" id="warningDistance" value="0.5" placeholder="">
                        <span class="input-group-addon">千米时提醒</span>
                        <span class="input-group-addon">当偏移距离大于</span>
                        <input type="text" class="form-control" id="alarmDistance" value="1.0" placeholder="">
                        <span class="input-group-addon">千米时报警</span>
                        <button type="button" class="btn btn-success btn-sm" onclick="setting();">设置</button>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>

        <div id="map_panel" style="display:none; width:20%; float:right; position:absolute; right:0px; z-index:1; ">
            <div id="myAlertFull"></div>
            <div class="input-group input-group-sm">
                <span class="input-group-addon">当偏移距离大于</span>
                <input type="text" class="form-control" id="warningDistanceFull" value="0.5" placeholder="">
                <span class="input-group-addon">千米时提醒</span>
            </div>
            <div class="input-group input-group-sm">
                <span class="input-group-addon">当偏移距离大于</span>
                <input type="text" class="form-control" id="alarmDistanceFull" value="1.0" placeholder="">
                <span class="input-group-addon">千米时报警</span>
            </div>

            <center>
                <button type="button" class="btn btn-success btn-sm" onclick="settingFull();">设置</button>
            </center>
            <div class="blank_div"></div>
            <div style="background-color:#FFFFFF; padding:4px; padding-bottom:50px;">
                <table id="vehicle_panel">
                    <caption>当前运行车辆统计表</caption>
                </table>
            </div>
            <div class="blank_div"></div>
            <div id="route_panel"></div>
        </div>

        <div id="map_container" style="width:100%; float:left;">地图加载中...</div>

    </div>
</div>

<script type="text/javascript" src="__PUBLIC__/js/fullscreen.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/myAlert.js"></script>

<script type="text/javascript">
if (typeof(intervalWarning) != 'undefined') {
    clearInterval(intervalWarning);
}
if (typeof(playbackTimeout) != 'undefined') {
    clearTimeout(playbackTimeout);
}
var fullScreen = 0; //是否处于全屏状态的标志

var routeDecodeObj = new Array();
var routeDetailDecodeObj = new Array();
var ajaxSendData = new Array();

var vehicleMarkerList = new Array();
var infoWindowList = new Array();
var polylineList = new Array();
var startMarkerList = new Array();
var endMarkerList = new Array();

var warningDistance = alarm_distance_json.warning_distance;
var alarmDistance = alarm_distance_json.alarm_distance;

var tableData = new Array();
var tableData = [];

function setBMap() {
    var windowHeight = $(window).height();
    $("#map_container").css("height", "" + windowHeight - 350 + "px");

    BaiduMap = new BMap.Map("map_container"); // 创建Map实例
    BaiduMap.centerAndZoom("上海", 11); // 初始化地图,设置中心点坐标和地图级别
    BaiduMap.addControl(new BMap.NavigationControl()); // 添加默认缩放平移控件
    BaiduMap.addControl(new BMap.ScaleControl()); // 添加默认比例尺控件
    BaiduMap.addControl(new BMap.OverviewMapControl()); //添加默认缩略地图控件
    BaiduMap.enableScrollWheelZoom(); //启用滚轮放大缩小
    BaiduMap.addControl(new BMap.MapTypeControl({
        anchor: BMAP_ANCHOR_BOTTOM_RIGHT
    })); // 添加默认地图控件
    BaiduMap.setCurrentCity("上海"); // 设置地图显示的城市 此项是必须设置的
    var mapStyle = {
        features: ["road", "building", "water", "land", "point"],
        style: "light"
    };
    BaiduMap.setMapStyle(mapStyle);

    $('#warningDistance').val(warningDistance);
    $('#warningDistanceFull').val(warningDistance);
    $('#alarmDistance').val(alarmDistance);
    $('#alarmDistanceFull').val(alarmDistance);

    for (var idx in route_json) {
        routeDecodeObj[idx] = JSON.parse(route_json[idx].route_lng_lat.replace(/&quot;/g, '"'));
        routeDetailDecodeObj[idx] = route_json[idx].route_detail.replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&quot;/g, '"');
        ajaxSendData[idx] = {
            "vehicle_id": route_json[idx].vehicle_id,
            "device_id": route_json[idx].device_id,
        }
    }

    lorryIconGreen = new BMap.Icon("__PUBLIC__/image/truck_green.png", new BMap.Size(32, 40), {
        anchor: new BMap.Size(16, 40),
        imageOffset: new BMap.Size(0, 0)
    });
    lorryIconYellow = new BMap.Icon("__PUBLIC__/image/truck_yellow.png", new BMap.Size(32, 40), {
        anchor: new BMap.Size(16, 40),
        imageOffset: new BMap.Size(0, 0)
    });
    lorryIconRed = new BMap.Icon("__PUBLIC__/image/truck_red.png", new BMap.Size(32, 40), {
        anchor: new BMap.Size(16, 40),
        imageOffset: new BMap.Size(0, 0)
    });

    startIcon = new BMap.Icon("__PUBLIC__/image/qidian.png", new BMap.Size(30, 32), {
        anchor: new BMap.Size(15, 32),
        imageOffset: new BMap.Size(0, 0) // 设置图片偏移
    });

    endIcon = new BMap.Icon("__PUBLIC__/image/zhongdian.png", new BMap.Size(30, 32), {
        anchor: new BMap.Size(15, 32),
        imageOffset: new BMap.Size(0, 0) // 设置图片偏移
    });

    $('#vehicle_panel').dataTable({
        "aaData": tableData,
        "aoColumns": [{
            "sTitle": "车牌号"
        }, {
            "sTitle": "时速"
        }, {
            "sTitle": "偏移距离"
        }],
        "bPaginate": true, //翻页功能
        "bLengthChange": true, //改变每页显示数据数量
        "bFilter": true, //过滤功能
        "bSort": true, //排序功能
        "bInfo": true, //页脚信息
        "bAutoWidth": true, //自动宽度
        "bStateSave": true, //状态保存，使用了翻页或者改变了每页显示数据数量，会保存在cookie中，下回访问时会显示上一次关闭页面时的内容。
        "sPaginationType": "full_numbers", //显示数字的翻页样式

        "oLanguage": {
            "sLengthMenu": "每页显示 _MENU_ 条记录",
            "sSearch": "搜索 _INPUT_",
            "sZeroRecords": "抱歉， 没有找到",
            "sInfo": "从 _START_ 到 _END_ /共 _TOTAL_ 条数据",
            "sInfoEmpty": "没有数据",
            "sInfoFiltered": "(从 _MAX_ 条数据中检索)",
            "oPaginate": {
                "sFirst": "首页",
                "sPrevious": "前一页",
                "sNext": "后一页",
                "sLast": "尾页"
            },
            "sProcessing": "正在加载数据...",
            "sZeroRecords": "没有检索到数据"
        }
    });

    BaiduMap.addEventListener("click", function() {
        while (polyline = polylineList.pop()) {
            BaiduMap.removeOverlay(polyline);
        }
        while (startMarker = startMarkerList.pop()) {
            BaiduMap.removeOverlay(startMarker);
        }
        while (endMarker = endMarkerList.pop()) {
            BaiduMap.removeOverlay(endMarker);
        }
        $('#route_panel').html("").css("background-color", "");
    });

    $(".anchorBL").hide();
}

function loadScript() {
    var script = document.createElement("script");
    script.src = "http://api.map.baidu.com/api?v=2.0&ak=KDdzQZSRLv89h4yrti56L5Gy&callback=setBMap";
    document.body.appendChild(script);
}

loadScript();

function transferWarning() {
    $.ajax({
        type: "POST",
        url: "<?php echo U('Home/DistrictMap/ajax_get_gps_data');?>",
        dataType: 'JSON',
        data: {
            'ajaxSendData': JSON.stringify(ajaxSendData),
        },
        success: function(gpsDataArray) {
            while (vehicleMarker = vehicleMarkerList.pop()) {
                BaiduMap.removeOverlay(vehicleMarker);
            }
            for (var gpsIdx in gpsDataArray) {
                if (!gpsDataArray[gpsIdx]) {
                    continue;
                }

                var offsetDistance = gpsDataArray[gpsIdx].offset_distance;
                offsetDistance = Math.round(offsetDistance * 1000) / 1000;

                var itemData = new Array();
                itemData[0] = route_json[gpsIdx].vehicle_num;
                itemData[1] = gpsDataArray[gpsIdx].speed;
                itemData[2] = offsetDistance;
                tableData[gpsIdx] = itemData;
                var dataTable = $('#vehicle_panel').dataTable();
                dataTable.fnClearTable();
                dataTable.fnAddData(tableData);

                var vehiclePoint = new BMap.Point(gpsDataArray[gpsIdx].lng, gpsDataArray[gpsIdx].lat);
                var vehicleMarker = new BMap.Marker(vehiclePoint, {
                    title: "危废运输车辆", // 覆盖物标题
                });
                vehicleMarkerList.push(vehicleMarker);

                var geoCoder = new BMap.Geocoder();
                var pointLocation = "";
                geoCoder.getLocation(vehiclePoint, function(rs) {
                    var addComp = rs.addressComponents;
                    pointLocation = "" + addComp.province + addComp.city + addComp.district + addComp.street + addComp.streetNumber;
                });

                var infoWindowContent = "<table class='table table-striped table-bordered table-hover table-condensed table-responsive' style='margin-bottom:0px'><tr><td>运输车辆牌照：</td><td>" + route_json[gpsIdx].vehicle_num + "</td></tr><tr><td>运输车辆类型：</td><td>" + route_json[gpsIdx].vehicle_type + "</td></tr><tr><td>运输单位名称：</td><td>" + transport_unit_json[gpsIdx].transport_unit_name + "</td></tr><tr><td>运输单位地址：</td><td>" + transport_unit_json[gpsIdx].transport_unit_address + "</td></tr><tr><td>运输单位电话：</td><td>" + transport_unit_json[gpsIdx].transport_unit_phone + "</td></tr><tr><td>环保联系人姓名：</td><td>" + transport_unit_json[gpsIdx].transport_unit_contacts_name + "</td></tr><tr><td>环保联系人电话：</td><td>" + transport_unit_json[gpsIdx].transport_unit_contacts_phone + "</td></tr></table>";
                var messageContent = "车辆牌照为：" + route_json[gpsIdx].vehicle_num + "的" + route_json[gpsIdx].vehicle_type + "，大致位置为：" + pointLocation;
                var infoWindowOption = {
                    width: 0, // 信息窗口宽度
                    height: 0, // 信息窗口高度
                    title: "车辆行驶中", // 信息窗口标题
                    message: messageContent, // 自定义部分的短信内容
                };

                var infoWindow = new BMap.InfoWindow(infoWindowContent, infoWindowOption);
                infoWindowList.push(infoWindow);

                var warningTextGreen = "<h3 style=' color:#33a02c; border-bottom:1px solid #ccc; padding:0px 0px 5px 0px; font:bold 20px arial,sans-serif; '>偏离" + offsetDistance + "千米，安全。</h3>";
                var warningTextYellow = "<h3 style=' color:#ffff33; border-bottom:1px solid #ccc; padding:0px 0px 5px 0px; font:bold 20px arial,sans-serif; '>偏离" + offsetDistance + "千米，注意！</h3>";
                var warningTextRed = "<h3 style=' color:#e31a1c; border-bottom:1px solid #ccc; padding:0px 0px 5px 0px; font:bold 20px arial,sans-serif; '>偏离" + offsetDistance + "千米，报警!</h3>";

                vehicleMarker.setTitle(gpsIdx);
                if (offsetDistance < warningDistance) {
                    vehicleMarker.setIcon(lorryIconGreen);
                    infoWindowList[gpsIdx].setTitle(warningTextGreen);
                } else if ((offsetDistance > warningDistance) && (offsetDistance < alarmDistance)) {
                    vehicleMarker.setIcon(lorryIconYellow);
                    infoWindowList[gpsIdx].setTitle(warningTextYellow);
                } else {
                    vehicleMarker.setIcon(lorryIconRed);
                    infoWindowList[gpsIdx].setTitle(warningTextRed);
                }

                BaiduMap.addOverlay(vehicleMarker);

                vehicleMarker.addEventListener("click", function(e) {
                    BaiduMap.openInfoWindow(infoWindowList[this.getTitle() - '0'], this.getPosition());
                });

                vehicleMarker.addEventListener("rightclick", function(e) {
                    var markerIdx = this.getTitle() - '0';
                    var pointArray = new Array();
                    for (var pointIdx in routeDecodeObj[markerIdx]) {
                        var lng = routeDecodeObj[markerIdx][pointIdx].lng;
                        var lat = routeDecodeObj[markerIdx][pointIdx].lat;
                        pointArray.push(new BMap.Point(lng, lat));
                    }
                    var polyline = new BMap.Polyline(pointArray, {
                        strokeColor: "#762a83",
                        strokeWeight: 5, // 折线的宽度，以像素为单位。
                        strokeOpacity: 0.8 // 折线的透明度，取值范围0 - 1。
                    });
                    BaiduMap.addOverlay(polyline);
                    polylineList.push(polyline);

                    var startPoint = new BMap.Point(routeDecodeObj[markerIdx][0].lng, routeDecodeObj[markerIdx][0].lat);
                    var startMarker = new BMap.Marker(startPoint, {
                        icon: startIcon,
                        title: "起点"
                    });
                    BaiduMap.addOverlay(startMarker);
                    startMarkerList.push(startMarker);

                    var routeLength = routeDecodeObj[markerIdx].length;
                    var endPoint = new BMap.Point(routeDecodeObj[markerIdx][routeLength - 1].lng, routeDecodeObj[markerIdx][routeLength - 1].lat);
                    var endMarker = new BMap.Marker(endPoint, {
                        icon: endIcon,
                        title: "终点"
                    });
                    BaiduMap.addOverlay(endMarker);
                    endMarkerList.push(endMarker);

                    $('#route_panel').css("background-color", "#FFFFFF").html("<h2 style='margin:0px;border-top:2px solid #ccc;padding:10px 0 5px 0px;font:bold 16px arial,sans-serif'>当前车辆指定路线详情：</h2>" + routeDetailDecodeObj[markerIdx]);
                });
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log("获取 GPS数据ajax请求 失败");
            console.log("Error:Ajax_Content_Load" + errorThrown);
            console.log("XMLHttpRequest.status:" + XMLHttpRequest.status);
            console.log("XMLHttpRequest.readyState:" + XMLHttpRequest.readyState);
            console.log("textStatus:" + textStatus);
        }
    });
}

setTimeout("transferWarning()", 2000);
var intervalWarning = setInterval("transferWarning()", 15000);

function setting() {
    var inputWarningDistance = $('#warningDistance');
    var inputAlarmDistance = $('#alarmDistance');
    if (!inputWarningDistance.val()) {
        inputWarningDistance.val(warningDistance);
    } else {
        warningDistance = inputWarningDistance.val();
        $('#warningDistanceFull').val(warningDistance);
    }
    if (!inputAlarmDistance.val()) {
        inputAlarmDistance.val(alarmDistance);
    } else {
        alarmDistance = inputAlarmDistance.val();
        $('#alarmDistanceFull').val(alarmDistance);
    }
    settingAlarmDistance();
}

function settingFull() {
    var inputWarningDistanceFull = $('#warningDistanceFull');
    var inputAlarmDistanceFull = $('#alarmDistanceFull');
    if (!inputWarningDistanceFull.val()) {
        inputWarningDistanceFull.val(warningDistance);
    } else {
        warningDistance = inputWarningDistanceFull.val();
        $('#warningDistance').val(warningDistance);
    }
    if (!inputAlarmDistanceFull.val()) {
        inputAlarmDistanceFull.val(alarmDistance);
    } else {
        alarmDistance = inputAlarmDistanceFull.val();
        $('#alarmDistance').val(alarmDistance);
    }
    settingAlarmDistance();
}

function settingAlarmDistance() {
    if ((warningDistance != alarm_distance_json.warning_distance) || (alarmDistance != alarm_distance_json.alarm_distance)) {
        $.ajax({
            type: "POST",
            url: "<?php echo U('Home/DistrictMap/ajax_setting_alarm_distance');?>",
            dataType: 'JSON',
            data: {
                "id": alarm_distance_json.id,
                "warning_distance": warningDistance,
                "alarm_distance": alarmDistance,
            },
            success: function(data) {
                if (data == 'success') {
                    myAlertSucc("告警距离设置成功");
                } else {
                    myAlertFail("告警距离设置失败，请重新设置");
                }
                alarm_distance_json.warning_distance = warningDistance;
                alarm_distance_json.alarm_distance = alarmDistance;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                myAlertFail("设置告警距离ajax请求失败，请重新设置");
                console.log("Error:Ajax_Content_Load" + errorThrown);
                console.log("XMLHttpRequest.status:" + XMLHttpRequest.status);
                console.log("XMLHttpRequest.readyState:" + XMLHttpRequest.readyState);
                console.log("textStatus:" + textStatus);
                warningDistance = alarm_distance_json.warning_distance;
                alarmDistance = alarm_distance_json.alarm_distance;
            }
        });
    } else {
        myAlertInfo("告警距离未修改，请修改后再设置");
    }
}
</script>