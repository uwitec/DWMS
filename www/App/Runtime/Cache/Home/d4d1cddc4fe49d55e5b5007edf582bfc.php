<?php if (!defined('THINK_PATH')) exit();?><form role="form" id="device_add">
    <div class="panel panel-primary">
        <div class="panel-heading">设备信息</div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <tr>
                        <td>设备名称</td>
                        <td>
                            <input type="text" name="device_name" class="form-control input-sm" placeholder="设备名称">
                        </td>
                        <td>设备类型</td>
                        <td>
                            <input type="text" name="device_type" class="form-control input-sm" placeholder="设备类型">
                        </td>
                    </tr>
                    <tr>
                        <td>设备序列号</td>
                        <td>
                            <input type="text" name="device_serial_num" class="form-control input-sm" placeholder="设备序列号">
                        </td>
                        <td>设备管辖权属</td>
                        <td>
                            <input type="text" name="jurisdiction_id" class="form-control input-sm" placeholder="设备管辖权属">
                        </td>
                    </tr>
                    <tr>
                        <td>设备归属企业类型</td>
                        <td>
                            <input type="text" name="ownership_type" class="form-control input-sm" placeholder="设备归属企业类型">
                        </td>
                        <td>设备归属企业编号</td>
                        <td>
                            <input type="text" name="ownership_id" class="form-control input-sm" placeholder="设备归属企业类型">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</form>

<center>
    <button class="btn btn-info btn-lg" id="button_add" data-loading-text="正在添加..." data-complete-text="添加成功！" onclick="ajaxAction()">添加</button>
</center>

<script type="text/javascript">
function ajaxAction(actionID) {
    $('#button_add').addClass('disabled');
    $('#button_add').button('loading');
    $.ajax({
        type: "post",
        url: "device_add_form",
        timeout: 2000,
        data: $('#device_add').serialize(),
        success: function(data) {
            $('#button_add').button('complete');
            setTimeout("$('#button_add').button('reset')", 3000);
            $('input').val('');
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert('保存失败，请重新保存。');
            console.log("Error: Ajax_Content_Load " + errorThrown);
            console.log("XMLHttpRequest.status: " + XMLHttpRequest.status);
            console.log("XMLHttpRequest.readyState: " + XMLHttpRequest.readyState);
            console.log("textStatus: " + textStatus);
        }
    });
}
</script>