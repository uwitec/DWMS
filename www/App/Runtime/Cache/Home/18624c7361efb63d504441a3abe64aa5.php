<?php if (!defined('THINK_PATH')) exit();?><table id="waste-table-container">
</table>
<br><hr>
<center>
    <button class="btn btn-primary btn-lg" id="button_close" onclick="$('#myModal').modal('hide');">关闭页面</button>
</center>
<script type="text/javascript">
var tableData = new Array();
for (var idx in rfid_json) {
    var itemData = new Array();
    itemData[0] = "" + rfid_json[idx].waste_code;
    itemData[1] = "" + rfid_json[idx].add_date_time;
    switch (rfid_json[idx].rfid_status) {
            case '0':
                itemData[2] = "<span class='label label-primary'>绑定废物</span>";
                break;
            case '1':
                itemData[2] = "<span class='label label-warning'>危废出库</span>";
                break;
            case '2':
                itemData[2] = "<span class='label label-success'>危废接受</span>";
                break;
            case '3':
                itemData[2] = "<span class='label label-info'>危废在库</span>";
                break;
            default:
                itemData[2] = "<span class='label label-danger'>状态错误</span>";
                break;
        }
    switch (rfid_json[idx].add_method) {
            case '0':
                itemData[3] = "<span class='label label-primary'>重量</span>";
                itemData[5] = "公斤";
                break;
            case '1':
                itemData[3] = "<span class='label label-info'>数量</span>";
                itemData[5] = "个";
                break;
            default:
                itemData[3] = "<span class='label label-danger'>状态错误</span>";
                itemData[5] = "状态错误";
                break;
        }
    itemData[4] = "" + rfid_json[idx].waste_total;
    tableData.push(itemData);
}

$('#waste-table-container').dataTable({
    "aaData": tableData,
    "aoColumns": [{
            "sTitle": "废物编号"
        },{
            "sTitle": "入库时间"
        },{
            "sTitle": "废物状态"
        },{
            "sTitle": "增加类型"
        },{
            "sTitle": "废物总量"
        },{
            "sTitle": "单位"
        }],
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

</script>