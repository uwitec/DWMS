<?php if (!defined('THINK_PATH')) exit();?><div class="table-responsive">
<big>
     <div class="alert alert-info">企业信息</div>
     <table class="table table-striped table-bordered table-hover table-condensed">

                                <tr>
                                    <td>产生单位名称</td>
                                    <td>
                                     <?php echo ($formData["production_unit_name"]); ?>
                                    </td>
                                    <td>产生单位用户名称</td>
                                    <td>
                                       <?php echo ($formData["production_unit_username"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位组织机构代码</td>
                                    <td>
                                        <?php echo ($formData["production_unit_code"]); ?>
                                    </td>
                                    <td>产生单位电话</td>
                                    <td>
                                        <?php echo ($formData["production_unit_phone"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位地址</td>
                                    <td>
                                     <?php echo ($formData["production_unit_address"]); ?>
                                    </td>
                                    <td>产生单位邮编</td>
                                    <td>
                                       <?php echo ($formData["production_unit_postcode"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>产废设施所在地</td>
                                    <td>
                                        <?php echo ($formData["waste_location"]); ?>
                                    </td>
                                    <td>产废设施所属区县</td>
                                    <td>
                                       <?php echo ($formData["waste_location_county"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>产废设施所在区县代码</td>
                                    <td>
                                        <?php echo ($formData["waste_location_county_code"]); ?>
                                    </td>
                                    <td>产生单位管辖权属</td>
                                    <td>
                                      <?php echo ($jurisdiction); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位所属行业</td>
                                    <td>
                                       <?php echo ($formData["production_unit_trade"]); ?>
                                    </td>
                                    <td>产生单位乡镇街道</td>
                                    <td>
                                        <?php echo ($formData["production_unit_street"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位注册类型</td>
                                    <td>
                                        <?php echo ($formData["production_unit_registration_type"]); ?>
                                    </td>
                                    <td>产生单位企业规模</td>
                                    <td>
                                        <?php echo ($formData["production_unit_enterprise_scale"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位环保联系人姓名</td>
                                    <td>
                                      <?php echo ($formData["production_unit_contacts_name"]); ?>
                                    </td>
                                    <td>产生单位环保联系人电话</td>
                                    <td>
                                        <?php echo ($formData["production_unit_contacts_phone"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位法人代码</td>
                                    <td>
                                        <?php echo ($formData["production_unit_legal_person_code"]); ?>
                                    </td>
                                    <td>产生单位法人姓名</td>
                                    <td>
                                       <?php echo ($formData["production_unit_legal_person_name"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位法人电话</td>
                                    <td>
                                       <?php echo ($formData["production_unit_legal_person_phone"]); ?>
                                    </td>
                                    <td>产生单位传真</td>
                                    <td>
                                        <?php echo ($formData["production_unit_fax"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位邮箱地址</td>
                                    <td>
                                       <?php echo ($formData["production_unit_email"]); ?>
                                    </td>
                                    <td>产生单位中心经度</td>
                                    <td>
                                      <?php echo ($formData["production_unit_longitude"]); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位中心纬度</td>
                                    <td>
                                       <?php echo ($formData["production_unit_latitude"]); ?>
                                    </td>
                                    <td>产生单位主要危废物</td>
                                    <td>
                                       <?php echo ($formData["production_unit_waste"]); ?>
                                    </td>
                                </tr>

                            </table>
                        </big>
                    </div>



<center>
    <button class="btn btn-warning btn-lg" onclick="$('#myModal').modal('hide');">关闭页面</button>
</center>