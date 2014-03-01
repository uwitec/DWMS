<?php if (!defined('THINK_PATH')) exit();?><div class="table-responsive">
   <big>

     <div class="alert alert-info">企业信息</div>
     <table class="table table-striped table-bordered table-hover table-condensed">

                                <tr>
                                    <td>运输单位名称</td>
                                    <td>
                                        <?php echo ($formData["transport_unit_name"]); ?>
                                    </td>
                                    <td>运输单位用户名称</td>
                                    <td>
                                        <?php echo ($formData["transport_unit_username"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位组织机构代码</td>
                                    <td>
                                       <?php echo ($formData["transport_unit_code"]); ?>
                                    </td>
                                    <td>运输单位电话</td>
                                    <td>
                                      <?php echo ($formData["transport_unit_phone"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位地址</td>
                                    <td>
                                      <?php echo ($formData["transport_unit_address"]); ?>
                                    </td>
                                    <td>运输单位邮编</td>
                                    <td>
                                       <?php echo ($formData["transport_unit_postcode"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位所在区县</td>
                                    <td>
                                        <?php echo ($formData["transport_unit_county"]); ?>
                                    </td>
                                    <td>运输单位所在区县代码</td>
                                    <td>
                                     <?php echo ($formData["transport_unit_county_code"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位管辖权属</td>
                                    <td>
                                       <?php echo ($jurisdiction); ?>
                                    </td>
                                    <td>运输单位所属行业</td>
                                    <td>
                                        <?php echo ($formData["transport_unit_trade"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位乡镇街道</td>
                                    <td>
                                       <?php echo ($formData["transport_unit_street"]); ?>
                                    </td>
                                    <td>运输单位注册类型</td>
                                    <td>
                                       <?php echo ($formData["transport_unit_registration_type"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位企业规模</td>
                                    <td>
                                        <?php echo ($formData["transport_unit_enterprise_scale"]); ?>
                                    </td>
                                    <td>运输单位许可证编号</td>
                                    <td>
                                        <?php echo ($formData["transport_unit_license_num"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位许可证文号</td>
                                    <td>
                                        <?php echo ($formData["transport_unit_reference_num"]); ?>
                                    </td>
                                    <td>许可证发证机关</td>
                                    <td>
                                       <?php echo ($formData["license_issuing_authority"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>许可证发证日期</td>
                                    <td>
                                        <?php echo ($formData["license_issuing_date"]); ?>
                                    </td>
                                    <td>许可证有效期至</td>
                                    <td>
                                        <?php echo ($formData["license_expiry_date"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位环保联系人姓名</td>
                                    <td>
                                      <?php echo ($formData["transport_unit_contacts_name"]); ?>
                                    </td>
                                    <td>运输单位环保联系人电话</td>
                                    <td>
                                    <?php echo ($formData["transport_unit_contacts_phone"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位法人代码</td>
                                    <td>
                                        <?php echo ($formData["transport_unit_legal_person_code"]); ?>
                                    </td>
                                    <td>运输单位法人姓名</td>
                                    <td>
                                        <?php echo ($formData["transport_unit_legal_person_name"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位法人电话</td>
                                    <td>
                                       <?php echo ($formData["transport_unit_legal_person_phone"]); ?>
                                    </td>
                                    <td>运输单位传真</td>
                                    <td>
                                       <?php echo ($formData["transport_unit_fax"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位邮箱地址</td>
                                    <td>
                                       <?php echo ($formData["transport_unit_email"]); ?>
                                    </td>
                                    <td>运输单位中心经度</td>
                                    <td>
                                       <?php echo ($formData["transport_unit_longitude"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位中心纬度</td>
                                    <td>
                                        <?php echo ($formData["transport_unit_latitude"]); ?>
                                    </td>
                                </tr>
                            </table>
                        </big>


<center>
    <button class="btn btn-warning btn-lg" onclick="$('#myModal').modal('hide');">关闭页面</button>
</center>