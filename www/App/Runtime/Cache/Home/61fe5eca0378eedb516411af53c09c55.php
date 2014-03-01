<?php if (!defined('THINK_PATH')) exit();?><form role="form" id="vehicle_add">
    <div class="panel panel-primary">
        <div class="panel-heading">车辆基本信息</div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <tr>
                        <td>车辆牌照</td>
                        <td>
                            <input type="text" name="vehicle_num" class="form-control input-sm required-cn" placeholder="车辆牌照">
                        </td>
                        <td>车辆类型</td>
                        <td>
                            <input type="text" name="vehicle_type" class="form-control input-sm required-cn" placeholder="车辆类型">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</form>

<center>
    <button class="btn btn-warning btn-lg" id="button_submit" data-loading-text="正在提交..." data-complete-text="提交成功！" onclick="ajaxAction()">提交</button>
</center>
<script type="text/javascript" src="__PUBLIC__/js/jquery-validate.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery-myvalidate.js"></script>
<script>
$("#vehicle_add").validate();
</script>
<script type="text/javascript">
function ajaxAction() {
    if(!$('#vehicle_add').valid()){
        return;
    }
    $('#button_save').addClass('disabled');
    $('#button_submit').button('loading');
    $.ajax({
        type: "post",
        url: "vehicle_add_form",
        timeout: 2000,
        data: $('#vehicle_add').serialize(),
        success: function(data) {
            $('#button_save').removeClass('disabled');
            $('#button_submit').button('complete');
            setTimeout("$('#button_submit').button('reset')", 3000);
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