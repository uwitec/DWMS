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
    
</head>
<script type="text/javascript">
/*
var mydata=["运输单位编号","transport_unit_id",
"用户编号","user_id",
"运输单位名称","transport_unit_name",
"运输单位用户名称","transport_unit_username",
"运输单位组织机构代码","transport_unit_code",
"运输单位电话","transport_unit_phone",
"运输单位地址","transport_unit_address",
"运输单位邮编","transport_unit_postcode",
"运输单位所在区县","transport_unit_county",
"运输单位所在区县代码","transport_unit_county_code",
"运输单位管辖权属","transport_unit_jurisdiction",
"运输单位所属行业","transport_unit_trade",
"运输单位乡镇街道","transport_unit_street",
"运输单位注册类型","transport_unit_registration_type",
"运输单位企业规模","transport_unit_enterprise_scale",
"运输单位许可证编号","transport_unit_license_num",
"运输单位许可证文号","transport_unit_reference_num",
"许可证发证机关","license_issuing_authority",
"许可证发证日期","license_issuing_date",
"许可证有效期至","license_expiry_date",
"运输单位环保联系人姓名","transport_unit_contacts_name",
"运输单位环保联系人电话","transport_unit_contacts_phone",
"运输单位法人代码","transport_unit_legal_person_code",
"运输单位法人姓名","transport_unit_legal_person_name",
"运输单位法人电话","transport_unit_legal_person_phone",
"运输单位传真","transport_unit_fax",
"运输单位邮箱地址","transport_unit_email",
"运输单位中心经度","transport_unit_longitude",
"运输单位中心纬度","transport_unit_latitude",
];

newHtml="";
for(var a=0;a<mydata.length;a+=4)
{
newHtml+="<tr><td>"
+mydata[a]
+'</td><td><input type="text" class="form-control input-md"'
+' name="'+mydata[a+1]+'" '
+' id="'+mydata[a+1]+'" '
+" ></td>"
+"<td>"0
5
10
15
20
25
30
Wang Lei

nihiue@gmail.com42 commits / 20291 ++ / 14617 --
Thu 09
Fri 10
Tue 07
Wed 08
Sat 11
Jan 12
Mon 13
Tue 14
0
5
10
15
20
25
30
Bin Zhang

zhangbinsjtu@qq.com33 commits / 157679 ++ / 14367 --

+mydata[a+2]
+'</td><td><input type="text" class="form-control input-md"'
+'name="'+mydata[a+3]+'" '
+'id="'+mydata[a+3]+'" '
+" ></td>"
+"</tr>";
}
console.log(newHtml);
*/
</script>

<body style="background:url(__PUBLIC__/image/bg_3.jpg) no-repeat;  background-color:#3D80AD;">
    <div class="container">
        <div class="panel panel-primary" id="login-panel" style="margin-top:20px">
            <div class="panel-heading">
                <h4>注册运输单位</h4>
            </div>
            <div class="panel-body" style="">

                <form role="form">

                    <div class="table-responsive">
                        <big>
                            <table class="table table-striped table-bordered table-hover table-condensed">

                                <tr>
                                    <td>运输单位编号</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_id" id="transport_unit_id">
                                    </td>
                                    <td>用户编号</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="user_id" id="user_id">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位名称</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_name" id="transport_unit_name">
                                    </td>
                                    <td>运输单位用户名称</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_username" id="transport_unit_username">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位组织机构代码</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_code" id="transport_unit_code">
                                    </td>
                                    <td>运输单位电话</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_phone" id="transport_unit_phone">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位地址</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_address" id="transport_unit_address">
                                    </td>
                                    <td>运输单位邮编</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_postcode" id="transport_unit_postcode">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位所在区县</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_county" id="transport_unit_county">
                                    </td>
                                    <td>运输单位所在区县代码</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_county_code" id="transport_unit_county_code">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位管辖权属</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_jurisdiction" id="transport_unit_jurisdiction">
                                    </td>
                                    <td>运输单位所属行业</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_trade" id="transport_unit_trade">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位乡镇街道</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_street" id="transport_unit_street">
                                    </td>
                                    <td>运输单位注册类型</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_registration_type" id="transport_unit_registration_type">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位企业规模</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_enterprise_scale" id="transport_unit_enterprise_scale">
                                    </td>
                                    <td>运输单位许可证编号</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_license_num" id="transport_unit_license_num">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位许可证文号</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_reference_num" id="transport_unit_reference_num">
                                    </td>
                                    <td>许可证发证机关</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="license_issuing_authority" id="license_issuing_authority">
                                    </td>
                                </tr>
                                <tr>
                                    <td>许可证发证日期</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="license_issuing_date" id="license_issuing_date">
                                    </td>
                                    <td>许可证有效期至</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="license_expiry_date" id="license_expiry_date">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位环保联系人姓名</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_contacts_name" id="transport_unit_contacts_name">
                                    </td>
                                    <td>运输单位环保联系人电话</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_contacts_phone" id="transport_unit_contacts_phone">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位法人代码</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_legal_person_code" id="transport_unit_legal_person_code">
                                    </td>
                                    <td>运输单位法人姓名</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_legal_person_name" id="transport_unit_legal_person_name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位法人电话</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_legal_person_phone" id="transport_unit_legal_person_phone">
                                    </td>
                                    <td>运输单位传真</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_fax" id="transport_unit_fax">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位邮箱地址</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_email" id="transport_unit_email">
                                    </td>
                                    <td>运输单位中心经度</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_longitude" id="transport_unit_longitude">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位中心纬度</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_latitude" id="transport_unit_latitude">
                                    </td>
                                </tr>
                            </table>
                        </big>
                    </div>

                    <center>
                        <button type="submit" class="btn btn-warning btn-lg">提交</button>
                    </center>
                </form>




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