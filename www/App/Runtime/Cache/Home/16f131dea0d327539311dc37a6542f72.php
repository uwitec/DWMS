<?php if (!defined('THINK_PATH')) exit();?><div class="panel panel-primary">
    <div class="panel-heading">
        <?php echo ($unit["reception_unit_name"]); ?>企业基本信息
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <!-- <caption>企业基本信息</caption> -->
                <tr>
                    <td>接受单位名称
                    </td>
                    <td><?php echo ($unit["reception_unit_name"]); ?>
                    </td>
                    <td>接受单位机构代码
                    </td>
                    <td><?php echo ($unit["reception_unit_code"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>接受单位邮箱地址
                    </td>
                    <td><?php echo ($unit["reception_unit_email"]); ?>
                    </td>
                    <td>接受单位电话
                    </td>
                    <td><?php echo ($unit["reception_unit_phone"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>接受单位地址
                    </td>
                    <td><?php echo ($unit["reception_unit_address"]); ?>
                    </td>
                    <td>接受单位邮编
                    </td>
                    <td><?php echo ($unit["reception_unit_postcode"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>接受单位所在区县
                    </td>
                    <td><?php echo ($unit["reception_unit_county"]); ?>
                    </td>
                    <td>接受单位所属行业
                    </td>
                    <td><?php echo ($unit["reception_unit_trade"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>接受单位管辖权属
                    </td>
                    <td><?php echo ((session('jurisdiction_name'))?(session('jurisdiction_name')):'环保局'); ?>
                    </td>
                    <td>接受单位乡镇街道
                    </td>
                    <td><?php echo ($unit["reception_unit_street"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>接受单位注册类型
                    </td>
                    <td><?php echo ($unit["reception_unit_registration_type"]); ?>
                    </td>
                    <td>接受单位企业规模
                    </td>
                    <td><?php echo ($unit["reception_unit_enterprise_scale"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>接受单位许可证编号
                    </td>
                    <td><?php echo ($unit["reception_unit_license_num"]); ?>
                    </td>
                    <td>接受单位许可证文号
                    </td>
                    <td><?php echo ($unit["reception_unit_reference_num"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>许可证发证机关
                    </td>
                    <td><?php echo ($unit["license_issuing_authority"]); ?>
                    </td>
                    <td>许可证发证日期
                    </td>
                    <td><?php echo ($unit["license_issuing_date"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>许可证有效期至
                    </td>
                    <td><?php echo ($unit["license_expiry_date"]); ?>
                    </td>
                    <td>接受单位环保联系人姓名
                    </td>
                    <td><?php echo ($unit["reception_unit_contacts_name"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>接受单位环保联系人电话
                    </td>
                    <td><?php echo ($unit["reception_unit_contacts_phone"]); ?>
                    </td>
                    <td>接受单位法人代码
                    </td>
                    <td><?php echo ($unit["reception_unit_legal_person_code"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>接受单位法人姓名
                    </td>
                    <td><?php echo ($unit["reception_unit_legal_person_name"]); ?>
                    </td>
                    <td>接受单位法人电话
                    </td>
                    <td><?php echo ($unit["reception_unit_legal_person_phone"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>接受单位传真
                    </td>
                    <td><?php echo ($unit["reception_unit_fax"]); ?>
                    </td>
                    <td>接受单位中心纬度
                    </td>
                    <td><?php echo ($unit["reception_unit_latitude"]); ?>
                    </td>
                </tr>
                <tr>
                    <td>接受单位中心经度
                    </td>
                    <td><?php echo ($unit["reception_unit_longitude"]); ?>
                    </td>
                    
                </tr>
            </table>
        </div>
    </div>
</div>
<center>
    <button class="btn btn-warning btn-lg" id="button_close" onclick="$('#myModal').modal('hide');">关闭页面</button>
</center>