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
                <h4 class="modal-title" id="myModalLabel">企业用户管理</h4>
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
    var tmp_page_name;
    var tableData = new Array();
    for (var idx in record_json) {
        var itemData = new Array();
        switch (record_json[idx].user_type) {
            case '5':
                tmp_page_name = "enterprise_user_management_page_production";
                itemData[0] = "生产单位";
                break;
            case '6':
                tmp_page_name = "enterprise_user_management_page_transport";
                itemData[0] = "运输单位";
                break;
            case '7':
                tmp_page_name = "enterprise_user_management_page_reception";
                itemData[0] = "接受单位";
                break;
            default:
                break;
        }


        itemData[1] = record_json[idx].unit_name;
        itemData[2] = record_json[idx].unit_username;
        itemData[4] = '<a href="#" onclick="fetch_model_page(\'./' + tmp_page_name + '?record_id=' + record_json[idx].user_id + '\')"><span class="label label-info"><span class="glyphicon glyphicon-paperclip"></span> 查看</span><a>';

        if (record_json[idx].is_verify == "0") {
            itemData[3] = "未验证";
            itemData[6] = '<a href="#" onclick="ajaxAction(0,' + record_json[idx].user_type+", "+ record_json[idx].user_id + ',1)"><span class="label label-primary"><span class="glyphicon glyphicon-paperclip"></span> 通过</span><a>';
        } else {
            itemData[3] = "已验证";
            itemData[6] = "";
        }


        if (record_json[idx].lock == "0") {
            //ajaxAction(actionID,itemIdx,actionValue)
            itemData[3] += "未锁定";
            itemData[5] = '<a href="#" onclick="ajaxAction(1,' + record_json[idx].user_type+", "+record_json[idx].user_id + ',1)"><span class="label label-danger"><span class="glyphicon glyphicon-paperclip"></span> 锁定</span><a>';
        } else {
            itemData[3] += "已锁定";
            itemData[5] = '<a href="#" onclick="ajaxAction(1,' +record_json[idx].user_type+", "+ record_json[idx].user_id + ',0)"><span class="label label-success"><span class="glyphicon glyphicon-paperclip"></span> 解锁</span><a>';
        }

        tableData.push(itemData);
    }

    $('#table-container').dataTable({
        "aaData": tableData,
        "aoColumns": [{
                "sTitle": "企业类型"
            },{
                "sTitle": "企业名称"
            }, {
                "sTitle": "用户名称"
            }, {
                "sTitle": "当前账户状态"
            }, {
                "sTitle": "查看详情"
            }, {
                "sTitle": "锁定操作"
            }, {
                "sTitle": "验证操作"
            }
        ],
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

        }
    });
}
setTable();

function ajaxAction(actionID, usertype, userIdx, actionValue) {

    postdata = {};
    if (actionID == 0) {    //is_verify
        postdata.action = "verify";
    } else if (actionID == 1) { //lock
        postdata.action = "lock";
    }
    postdata.value = "" + actionValue;
    postdata.user_id = userIdx;
	postdata.usertype=usertype;
    $.ajax({
        type: "post",
        url: "enterprise_user_management_ajaxpost",
        data: postdata,
        success: function(rdata) {
            //console.log(data);
			xdata=JSON.parse(rdata);
			// console.log(xdata);
            refresh_page();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log("Error:Ajax_Content_Load" + errorThrown);
            console.log("XMLHttpRequest.status:" + XMLHttpRequest.status);
            console.log("XMLHttpRequest.readyState:" + XMLHttpRequest.readyState);
            console.log("textStatus:" + textStatus);
        }
    });
}

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