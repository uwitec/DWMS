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
                <h4 class="modal-title" id="myModalLabel">设备管理</h4>
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
    //console.log(record_json);
    for (var idx in record_json) {
        var itemDetail = '<a href="#" onclick="fetch_model_page(\'./device_management_detail?record_id=' + record_json[idx].device_id + '\')"><span class="label label-info"><span class="glyphicon glyphicon-paperclip"></span> 详情</span><a>';
        var itemModify = ' <a href="#" onclick="fetch_model_page(\'./device_management_modify?record_id=' + record_json[idx].device_id + '\')"><span class="label label-warning"><span class="glyphicon glyphicon-paperclip"></span> 修改</span><a>';
        var itemData = new Array();
        itemData[0] = "" + record_json[idx].device_name;
        itemData[1] = "" + record_json[idx].device_type;
        itemData[2] = "" + record_json[idx].device_serial_num;
        switch (record_json[idx].ownership_type) {
            case '0':
                itemData[3] = "<span>系统管理员</span>";
                break;
            case '1':
                itemData[3] = "<span>国家环保部</span>";
                break;
            case '2':
                itemData[3] = "<span>省环保厅</span>";
                break;
            case '3':
                itemData[3] = "<span>市环保局</span>";
                break;
            case '4':
                itemData[3] = "<span>区环保局</span>";
                break;
            case '5':
                itemData[3] = "<span>生产单位</span>";
                break;
            case '6':
                itemData[3] = "<span>运输单位</span>";
                break;
            case '7':
                itemData[3] = "<span>接受单位</span>";
                break;
            default:
                itemData[3] = "<span>归属错误！</span>";
                break;
        }

        itemData[4] = itemDetail + itemModify;
        tableData.push(itemData);
    }

    $('#table-container').dataTable({
        "aaData": tableData,
        "aoColumns": [{
            "sTitle": "名称"
        }, {
            "sTitle": "类型"
        }, {
            "sTitle": "序列号"
        }, {
            "sTitle": "归属类型"
        }, {
            "sTitle": "操作"
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
    $('#myModal').modal("show");

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
</script>