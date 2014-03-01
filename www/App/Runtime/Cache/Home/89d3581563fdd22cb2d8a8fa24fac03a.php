<?php if (!defined('THINK_PATH')) exit();?><div class="panel panel-primary">
    <div class="panel-heading">
    </div>
    <div class="panel-body">
        <table id="table-container">
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:70%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">运输车辆管理</h4>
            </div>
            <div class="modal-body" id="model-content">
            </div>
            <div class="modal-footer"></div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script type="text/javascript">
function setTable() {
    var tableData = new Array();
    for (var idx in vehicle) {
        var itemDetail = '<a href="#" onclick="fetch_model_page(\'./vehicle_management_detail?vehicle_id=' + vehicle[idx].vehicle_id + '\')"><span class="label label-info"><span class="glyphicon glyphicon-paperclip"></span> 详情</span><a>';
        var itemModify = ' <a href="#" onclick="fetch_model_page(\'./vehicle_management_modify?vehicle_id=' + vehicle[idx].vehicle_id + '\')"><span class="label label-success"><span class="glyphicon glyphicon-paperclip"></span> 修改</span><a>';
        var itemDelete = ' <a href="#" onclick="vehicle_delete(\'./vehicle_management_delete?vehicle_id=' + vehicle[idx].vehicle_id + '\')"><span class="label label-danger"><span class="glyphicon glyphicon-paperclip"></span> 删除</span><a>';
        var itemData = new Array();
        // itemData[0] = "" + vehicle[idx].vehicle_id;
        if(vehicle[idx].vehicle_status == 0){
            itemStatus = '<a href="#" onclick="fetch_model_page(\'./vehicle_gps_binding_request?vehicle_id=' + vehicle[idx].vehicle_id + '\')"><span class="label label-info"> 未绑定GPS</span><a>';
        } else if(vehicle[idx].vehicle_status == 1){
            itemStatus = '<a href="#" onclick="fetch_model_page(\'./vehicle_gps_binding_detail?vehicle_id=' + vehicle[idx].vehicle_id + '\')"><span class="label label-primary"> 已绑定GPS</span><a>';  
        } else{
            itemStatus = '<a href="#"><span class="label label-danger">状态错误</span><a>';
        }

        
        itemData[0] = "" + vehicle[idx].vehicle_num;
        itemData[1] = "" + vehicle[idx].vehicle_type;
        itemData[2] = "" + itemStatus;
        itemData[3] = "" + itemDetail + itemModify + itemDelete;
        tableData.push(itemData);
    }

    $('#table-container').dataTable({
        //"bProcessing": true,    //是用ajax源
        //"bServerSide": true,    //在服务器端整理数据
        "aaData": tableData,
        "aoColumns": [{
            "sTitle": "车辆牌照"
        }, {
            "sTitle": "车辆类型"
        }, {
            "sTitle": "车辆状态"
        }, {
            "sTitle": "操作"
        }],
        "bPaginate": true, //翻页功能
        "bLengthChange": true, //改变每页显示数据数量
        "bFilter": true, //过滤功能
        "bSort": false, //排序功能
        "bInfo": true, //页脚信息
        "bAutoWidth": true, //自动宽度
        "bStateSave": true, //状态保存，使用了翻页或者改变了每页显示数据数量，会保存在cookie中，下回访问时会显示上一次关闭页面时的内容。
        "sPaginationType": "full_numbers", //显示数字的翻页样式

        "oLanguage": {
            "sLengthMenu": "每页显示 _MENU_ 条记录",
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
            "sZeroRecords": "没有检索到数据"
            /*"sProcessing": "<img src='./loading.gif' />"*/
        }
    });
}
setTable();

function fetch_model_page(ajaxURL) {
    $('#myModal').modal('show');
    $("#model-content").html('<center style="margin-top:20px"><h4>努力地加载中...</h4><div class="progress progress-striped active" style="width: 50%"><div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div></center>');

    $.ajax({
        type: "get",
        url: ajaxURL,
        dataType: "json",
        success: function(data) {
            $("#model-content").html(data);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log("Error:Ajax_Content_Load" + errorThrown);
            console.log("XMLHttpRequest.status:" + XMLHttpRequest.status);
            console.log("XMLHttpRequest.readyState:" + XMLHttpRequest.readyState);
            console.log("textStatus:" + textStatus);
        }
    });

}

function vehicle_delete(ajaxURL){
    $.ajax({
        type: "post",
        url: ajaxURL,
        dataType: "json",
        success:function(data){
            refresh_page();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log("Error: Ajax_Content_Load " + errorThrown);
            console.log("XMLHttpRequest.status: " + XMLHttpRequest.status);
            console.log("XMLHttpRequest.readyState: " + XMLHttpRequest.readyState);
            console.log("textStatus: " + textStatus);
        }

    })
}

</script>