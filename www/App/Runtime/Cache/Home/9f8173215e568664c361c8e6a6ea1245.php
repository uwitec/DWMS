<?php if (!defined('THINK_PATH')) exit();?><div class="panel panel-primary">
    <div class="panel-heading">
    </div>
    <div class="panel-body">
        <table id="table-container" class="table table-condensed">
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:70%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">包装方式修改</h4>
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
    for (var idx in record_json) {
        var itemDelete = '<a href="#" onclick="record_delete(\'./package_method_delete?record_id=' + record_json[idx].package_method_id + '\')"><span class="label label-danger"><span class="glyphicon glyphicon-paperclip"></span> 删除</span><a>';
        var itemModify = ' <a href="#" onclick="fetch_model_page(\'./package_method_modify?record_id=' + record_json[idx].package_method_id + '\')"><span class="label label-primary"><span class="glyphicon glyphicon-paperclip"></span> 修改</span><a>';
        var itemData = new Array();
        itemData[0] = "" + record_json[idx].package_method_code;
        itemData[1] = "" + record_json[idx].package_method;
        // itemData[2] = "" + itemDelete + itemModify;
        tableData.push(itemData);
    }
 
    $('#table-container').dataTable({
        "aaData": tableData,
        "aoColumns": [{
            "sTitle": "包装方式编号"
        }, {
            "sTitle": "包装方式"
        }/*, {
            "sTitle": "操作"
        }*/],
        "bPaginate": true, 
        "bLengthChange": true, 
        "bFilter": true, 
        "bSort": false, 
        "bInfo": true, 
        "bAutoWidth": true, 
        "bStateSave": true, 
        "sPaginationType": "full_numbers",

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
        }
    });
}
setTable();

function record_delete(ajaxURL){
    $.ajax({
        type: "post",
        url: ajaxURL,
        dataType: "json",
        success:function(data){
            console.log(111);
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
</script>