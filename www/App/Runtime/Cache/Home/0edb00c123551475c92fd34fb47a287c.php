<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="zh-cn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="__PUBLIC__/image/favicon.png">

    <title>危险废物管理信息系统</title>

    <!-- Bootstrap core CSS -->
    <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="__PUBLIC__/css/signin.css" rel="stylesheet">

    <script type="text/javascript" src="__PUBLIC__/js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/jquery-validate.min.js"></script>
    <script type="text/javascript">



    function sel_city(province_id){
        // console.log(province_id);
          $.ajax({
            type: "post",
            url: "<?php echo U('Home/Register/select_city_name');?>",
            dataType: "json",
            data:{
                'id': province_id
            },
            success: function(city_name_json) {
                city_name = JSON.parse(city_name_json);
                $('#city_name').html('<option>请选择所在市</option>');
                for (var idx in city_name) {
                $('#city_name').append('<option value="' + city_name[idx].county_id + '">' + city_name[idx].county_name + '</option>');
                }   
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log("Error:Ajax_Content_Load" + errorThrown);
                console.log("XMLHttpRequest.status:" + XMLHttpRequest.status);
                console.log("XMLHttpRequest.readyState:" + XMLHttpRequest.readyState);
                console.log("textStatus:" + textStatus);
            }
         });
    }

     function sel_county(city_id){
        // console.log(city_id);
          $.ajax({
            type: "post",
            url: "<?php echo U('Home/Register/select_county_name');?>",
            dataType: "json",
            data:{
                'id': city_id
            },
            success: function(county_name_json) {
                county_name = JSON.parse(county_name_json);
                $('#county_name').html('<option>请选择所在区县</option>');
                for (var idx in county_name) {
                $('#county_name').append('<option value="' + county_name[idx].county_name + '">' + county_name[idx].county_name + '</option>');
                }
                
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log("Error:Ajax_Content_Load" + errorThrown);
                console.log("XMLHttpRequest.status:" + XMLHttpRequest.status);
                console.log("XMLHttpRequest.readyState:" + XMLHttpRequest.readyState);
                console.log("textStatus:" + textStatus);
            }
         });
    }

    function county_code_jurisdiction(county_name){
        // console.log(county_name);
        $.ajax({
            type: "post",
            url: "<?php echo U('Home/Register/select_code_jurisdiction');?>",
            dataType: "json",
            data:{
                'name': county_name
            },
            success: function(jurisdiction_json) {
                // county_code = JSON.parse(county_code_json);
                // $('#waste_location_county_code').html('<option>区县代码</option>');
                // for (var idx in county_code) {
                // $('#waste_location_county_code').append('<option value="' + county_code[idx].county_id + '">' + county_name[idx].county_code + '</option>');
                // }
                jurisdiction = JSON.parse(jurisdiction_json);  
                $('#jurisdiction_id').html('<option value="' + jurisdiction[0].jurisdiction_id + '">' + jurisdiction[0].jurisdiction_name + '</option>');
                // for (var idx in jurisdiction) {
                // $('#jurisdiction_id').append('<option value="' + jurisdiction[idx].jurisdiction_id + '">' + jurisdiction[idx].jurisdiction_name + '</option>');
                // }

            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log("Error:Ajax_Content_Load" + errorThrown);
                console.log("XMLHttpRequest.status:" + XMLHttpRequest.status);
                console.log("XMLHttpRequest.readyState:" + XMLHttpRequest.readyState);
                console.log("textStatus:" + textStatus);
            }
        });

    $.ajax({
            type: "post",
            url: "<?php echo U('Home/Register/select_code');?>",
            dataType: "json",
            data:{
                'name': county_name
            },
            success: function(code_json) {
                // county_code = JSON.parse(county_code_json);
                // $('#waste_location_county_code').html('<option>区县代码</option>');
                // for (var idx in county_code) {
                // $('#waste_location_county_code').append('<option value="' + county_code[idx].county_id + '">' + county_name[idx].county_code + '</option>');
                // }
                var code = JSON.parse(code_json);  
               // $('#waste_location_county_code').html('<option>code[0]['county_code']</option>');
                console.log(code);
               // for (var idx in county_name) {
                $('#waste_location_county_code').html("<option>"+code[0]['county_code']+"</option>");
              //  }   

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

</head>

<body style="background:url(__PUBLIC__/image/bg_3.jpg) no-repeat;  background-color:#3D80AD;">
    <div class="container">
        <div class="panel panel-primary" id="login-panel" style="margin-top:20px">
            <div class="panel-heading">
                <h4>注册生产单位</h4>
            </div>
            <div class="panel-body" style="">

                <form role="form" method="post" id="productionForm" action="<?php echo U('Home/Register/do_reg',array('id'=>'production'));?>">

                    <div class="table-responsive">
                        <big>
                            <div class="alert alert-info">账户信息</div>
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <tr>
                                    <td>用户名</td>
                                    <td>
                                        <input type="text" class="form-control required-cn pwdEqual_1" name="username" id="username" placeholder="用户名">
                                    </td>
                                </tr>
                                <tr>
                                    <td>密码</td>
                                    <td>
                                        <input type="password" class="form-control required-cn" name="password" id="password" placeholder="密码">
                                    </td>
                                </tr>
                                <tr>
                                    <td>确认密码</td>
                                    <td>
                                        <input type="password" class="form-control required-cn pwdEqual" id="re-password" placeholder="确认密码">
                                    </td>
                                </tr>
                                <tr>
                                    <td>电子邮件</td>
                                    <td>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="电子邮件">
                                    </td>
                                </tr>
                                <tr>
                                    <td>手机号码</td>
                                    <td>
                                        <input type="text" class="form-control" name="phone_num" id="phone_num" placeholder="手机号码">
                                    </td>
                                </tr>
                            </table>
                            <div class="alert alert-info">企业信息</div>
                            <table class="table table-striped table-bordered table-hover table-condensed">

                                <tr>
                                    <td>产生单位名称</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="production_unit_name" id="production_unit_name">
                                    </td>
                                    <td>产生单位用户名称</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="production_unit_username" id="production_unit_username">
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位组织机构代码</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="production_unit_code" id="production_unit_code">
                                    </td>
                                    <td>产生单位电话</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="production_unit_phone" id="production_unit_phone">
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位地址</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="production_unit_address" id="production_unit_address">
                                    </td>
                                    <td>产生单位邮编</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="production_unit_postcode" id="production_unit_postcode">
                                    </td>
                                </tr>
                                <tr>
                                    <td>产废设施所属省</td>
                                    <td>
                                         <select type="text" class="form-control input-md required-cn" id="province_name" name="production_unit_province" onchange="sel_city(this.options[this.options.selectedIndex].value)">
                                          <option value="1"><?php echo ($county_code[0]["county_name"]); ?></option>
                                          <option value="2"><?php echo ($county_code[1]["county_name"]); ?></option>
                                          <option value="3"><?php echo ($county_code[2]["county_name"]); ?></option>
                                          <option value="4"><?php echo ($county_code[3]["county_name"]); ?></option>
                                          <option value="5"><?php echo ($county_code[4]["county_name"]); ?></option>
                                          <option value="6"><?php echo ($county_code[5]["county_name"]); ?></option>
                                          <option value="7"><?php echo ($county_code[6]["county_name"]); ?></option>
                                          <option value="8"><?php echo ($county_code[7]["county_name"]); ?></option>
                                          <option value="9"><?php echo ($county_code[8]["county_name"]); ?></option>
                                          <option value="10"><?php echo ($county_code[9]["county_name"]); ?></option>
                                          <option value="11"><?php echo ($county_code[10]["county_name"]); ?></option>
                                          <option value="12"><?php echo ($county_code[11]["county_name"]); ?></option>
                                          <option value="13"><?php echo ($county_code[12]["county_name"]); ?></option>
                                          <option value="14"><?php echo ($county_code[13]["county_name"]); ?></option>
                                          <option value="15"><?php echo ($county_code[14]["county_name"]); ?></option>
                                          <option value="16"><?php echo ($county_code[15]["county_name"]); ?></option>
                                          <option value="17"><?php echo ($county_code[16]["county_name"]); ?></option>
                                          <option value="18"><?php echo ($county_code[17]["county_name"]); ?></option>
                                          <option value="19"><?php echo ($county_code[18]["county_name"]); ?></option>
                                          <option value="20"><?php echo ($county_code[19]["county_name"]); ?></option>
                                          <option value="21"><?php echo ($county_code[20]["county_name"]); ?></option>
                                          <option value="22"><?php echo ($county_code[21]["county_name"]); ?></option>
                                          <option value="23"><?php echo ($county_code[22]["county_name"]); ?></option>
                                          <option value="24"><?php echo ($county_code[23]["county_name"]); ?></option>
                                          <option value="25"><?php echo ($county_code[24]["county_name"]); ?></option>
                                          <option value="26"><?php echo ($county_code[25]["county_name"]); ?></option>
                                          <option value="27"><?php echo ($county_code[26]["county_name"]); ?></option>
                                          <option value="28"><?php echo ($county_code[27]["county_name"]); ?></option>
                                          <option value="29"><?php echo ($county_code[28]["county_name"]); ?></option>
                                          <option value="30"><?php echo ($county_code[29]["county_name"]); ?></option>
                                          <option value="31"><?php echo ($county_code[30]["county_name"]); ?></option>
                                          <option value="32"><?php echo ($county_code[31]["county_name"]); ?></option>
                                          <option value="33"><?php echo ($county_code[32]["county_name"]); ?></option>
                                        </select>
                                    </td>
                                    <td>产废设施所属市</td>
                                    <td>
                                        <select type="text" class="form-control input-md required-cn" id="city_name" name="production_unit_city" onchange="sel_county(this.options[this.options.selectedIndex].value)">
                                            <option>请选择所在市</option>
                                        </select>
                                        <!-- <input type="text" class="form-control input-md required-cn" name="waste_location" id="waste_location"> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>产废设施所属区县</td>
                                    <td>
                                        <select type="text" class="form-control input-md required-cn" name="waste_location_county" id="county_name" onchange="county_code_jurisdiction(this.options[this.options.selectedIndex].value)">
                                            <option>请选择所在区县</option>
                                        </select>
                                    </td>
                                    <td>产废设施所在地</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="waste_location" id="waste_location">
                                    </td>
                                </tr>
                                <tr>
                                    <td>产废设施所在区县代码</td>
                                    <td>                  
                                    <select type="text" class="form-control input-md required-cn" name="waste_location_county_code" id="waste_location_county_code">
                                            <!-- <option>区县代码</option> -->
                                        </select>                                    
                                    </td>
                                    <td>产生单位管辖权属</td>
                                    <td>
                                        <select type="text" class="form-control input-md required-cn" name="jurisdiction_id" id="jurisdiction_id">
                                            <option>管辖权属</option>
                                        </select>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位所属行业</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="production_unit_trade" id="production_unit_trade">  
                                    </td>
                                    <td>产生单位乡镇街道</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="production_unit_street" id="production_unit_street">
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位注册类型</td>
                                    <td>
                                        <select type="text" class="form-control input-md" name="production_unit_registration_type" id="production_unit_registration_type">          
                                        </select>   
                                    </td>
                                    <td>产生单位企业规模</td>
                                    <td>
                                        <select type="text" class="form-control input-md required-cn" name="production_unit_enterprise_scale" id="production_unit_enterprise_scale">
                                        </select>  
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位环保联系人姓名</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="production_unit_contacts_name" id="production_unit_contacts_name">
                                    </td>
                                    <td>产生单位环保联系人电话</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="production_unit_contacts_phone" id="production_unit_contacts_phone">
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位法人代码</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="production_unit_legal_person_code" id="production_unit_legal_person_code">
                                    </td>
                                    <td>产生单位法人姓名</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="production_unit_legal_person_name" id="production_unit_legal_person_name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位法人电话</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="production_unit_legal_person_phone" id="production_unit_legal_person_phone">
                                    </td>
                                    <td>产生单位传真</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="production_unit_fax" id="production_unit_fax">
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位邮箱地址</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="production_unit_email" id="production_unit_email">
                                    </td>
                                    <td>产生单位中心经度</td>
                                    <td>
                                        <input type="text" class="form-control input-md number-cn" name="production_unit_longitude" id="production_unit_longitude">
                                    </td>
                                </tr>
                                <tr>
                                    <td>产生单位中心纬度</td>
                                    <td>
                                        <input type="text" class="form-control input-md number-cn" name="production_unit_latitude" id="production_unit_latitude">
                                    </td>
                                     <td>产生单位主要危废物代码</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="production_unit_waste" id="production_unit_waste">
                                    </td>
                                </tr>
                            </table>
                        </big>
                    </div>

                    <center>
                        <button type="submit" class="btn btn-warning btn-lg">提交</button>
                    </center>
                </form>
                <script type="text/javascript" src="__PUBLIC__/js/jquery-myvalidate.js"></script>
                <script>
                $("#productionForm").validate();
                for (var idx in enterprise_scale) {
                    $('#production_unit_enterprise_scale').append('<option>' + enterprise_scale[idx].enterprise_scale_name + '</option>');
                }
                for (var idx in enterprise_scale) {
                    $('#production_unit_registration_type').append('<option>' + enterprise_register_type[idx].enterprise_register_type_name + '</option>');
                }
                </script>


            </div>
        </div>
        <div class="panel panel-info" id="login-panel" style="margin-top:20px">
            <div class="panel-heading">
                <h3></h3>
            </div>
            <div class="panel-body">
                <footer class="bs-footer" role="contentinfo">
                    <div class="text-center padder clearfix txt-shadow">

                        <div class="blank-div"></div>
                        危险废物管理信息系统
                        <br/>Copyright © 2014-2015
                        <br/>
                        <span class="glyphicon glyphicon-send"></span>
                        <b>SJTU OMNILab</b>
                    </div>

                </footer>
            </div>
        </div>
    </div>
    <!-- /container -->

    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery core JavaScript -->

</body>

</html>