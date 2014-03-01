<?php if (!defined('THINK_PATH')) exit();?><form role="form" id="vehicle_detail">
 <div class="panel panel-primary">
        <div class="panel-heading">运输车辆基本信息</div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-condensed">
                <tr>
                    <td>车辆牌照</td>
                    <td>
                        <?php echo ($vehicle["vehicle_num"]); ?>
                    </td>
                    <td>车辆类型</td>
                    <td>
                        <?php echo ($vehicle["vehicle_type"]); ?>
                    </td>
                </tr>                 
                <tr>
                    <td>车辆信息添加时间</td>
                    <td>
                        <?php echo ($vehicle["vehicle_add_time"]); ?>
                    </td>
                    <td>车辆信息最后修改时间</td>
                    <td>
                        <?php echo ($vehicle["vehicle_modify_time"]); ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
</form>

<center>
    <button class="btn btn-info btn-lg" onclick="$('#myModal').modal('hide');">关闭页面</button>
</center>