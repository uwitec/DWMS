<?php if (!defined('THINK_PATH')) exit();?><form role="form" id="manifest_detail">

    <div class="panel panel-primary">
        <div class="panel-heading">联单信息</div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-condensed">
                <tr>
                    <td>运输单位</td>
                    <td>
                        <?php echo ($t_name); ?>
                    </td>
                    <td>接受单位</td>
                    <td>
                        <?php echo ($r_name); ?>
                    </td>
                </tr>                 
                <tr>
                    <td>危废数量（袋/个）</td>
                    <td>
                        <?php echo ($manifest["waste_num"]); ?>
                    </td>
                    <td>危废重量（桶/公斤）</td>
                    <td>
                        <?php echo ($manifest["waste_weight"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>危废包装方式</td>
                    <td>
                        <?php echo ($manifest["waste_package"]); ?>
                    </td>
                    <td>危废外运目的</td>
                    <td>
                        <?php echo ($manifest["waste_transport_goal"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>应急措施</td>
                    <td>
                        <?php echo ($manifest["emergency_measure"]); ?>
                    </td>
                    <td>危废发运人</td>
                    <td>
                        <?php echo ($manifest["waste_shipper"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>危废运达地</td>
                    <td>
                        <?php echo ($manifest["waste_destination"]); ?>
                    </td>
                    <td>危废转移时间</td>
                    <td>
                        <?php echo ($manifest["waste_transport_time"]); ?>
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