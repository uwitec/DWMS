<?php if (!defined('THINK_PATH')) exit();?><script>username = ["admin","country","province","city","district","production","transport","reception","this this for test","this this for test","yao","this this for test","this this for test","this this for test","this this for test","this this for test","gdbnwy","production2","sky","sky","sky","sky","sky","sky","sky","sky","sky","sky","sky","sky","sky","123","123456","123456","12345678","12345678","123456789","12345600","12345600","12345600","12345601","12345604","12345606","123456069","123456069","reception3","1234yao","yaotest","yaotest","12345678","12345678","188019","87654321","87654321","188019","188019","188019","188019","188019","188020","188020","188020","188020","188021","188022","188023","188024","188025","188026","188027","188028","188029","188030","188031","188032","188035","188037","188038","188039","188040","188041","188042","188043","188050","188051","188052","production","xinfuhuagong","123123213","12321321","12312321312312321","1232132","sky@gmail.com","sky@gmail.com123","sky@gmail.com123","sky@gmail.com12332","product","sky@gmail.com1232","sky@gmail.com123221"];</script> <!DOCTYPE html>

<html lang="zh-cn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/DWMS/www/Public/image/favicon.png">

    <title>危险废物管理信息系统</title>

    <!-- Bootstrap core CSS -->
    <link href="/DWMS/www/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/DWMS/www/Public/css/signin.css" rel="stylesheet">

    <script type="text/javascript" src="/DWMS/www/Public/js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/DWMS/www/Public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/DWMS/www/Public/js/jquery-validate.min.js"></script>

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
+"<td>"
+mydata[a+2]
+'</td><td><input type="text" class="form-control input-md"'
+'name="'+mydata[a+3]+'" '
+'id="'+mydata[a+3]+'" '
+" ></td>"
+"</tr>";
}
console.log(newHtml);
*/
function sel_city(province_id){
        console.log(province_id);
          $.ajax({
            type: "post",
            url: "/DWMS/www/index.php/Home/Register/select_city_name.html",
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
        console.log(city_id);
          $.ajax({
            type: "post",
            url: "/DWMS/www/index.php/Home/Register/select_county_name.html",
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
        console.log(county_name);
        $.ajax({
            type: "post",
            url: "/DWMS/www/index.php/Home/Register/select_code_jurisdiction.html",
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
            url: "/DWMS/www/index.php/Home/Register/select_code.html",
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
                code = JSON.parse(code_json);  
                $('#transport_unit_county_code').html('<option value="' + code[0].county_code + '">' + code[0].county_code + '</option>');
                 

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

<body style="background:url(/DWMS/www/Public/image/bg_3.jpg) no-repeat;  background-color:#3D80AD;">
    <div class="container">

        <div class="panel panel-primary" id="login-panel" style="margin-top:20px">
            <div class="panel-heading">
                <h4>注册运输单位</h4>
            </div>
            <div class="panel-body">

                <form role="form" method="post" id="transportForm" action="/DWMS/www/index.php/Home/Register/do_reg/id/transport.html">
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
                                    <td>运输单位名称</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="transport_unit_name" id="transport_unit_name">
                                    </td>
                                    <td>运输单位用户名称</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="transport_unit_username" id="transport_unit_username">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位组织机构代码</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="transport_unit_code" id="transport_unit_code">
                                    </td>
                                    <td>运输单位电话</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="transport_unit_phone" id="transport_unit_phone">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位地址</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="transport_unit_address" id="transport_unit_address">
                                    </td>
                                    <td>运输单位邮编</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="transport_unit_postcode" id="transport_unit_postcode">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位所在省</td>
                                    <td>
                                        <select type="text" class="form-control input-md required-cn" name="transport_unit_province" id="province_name" onchange="sel_city(this.options[this.options.selectedIndex].value)">
                                          <option value="1">北京市</option>
                                          <option value="2">天津市</option>
                                          <option value="3">河北省</option>
                                          <option value="4">山西省</option>
                                          <option value="5">内蒙古自治区</option>
                                          <option value="6">辽宁省</option>
                                          <option value="7">吉林省</option>
                                          <option value="8">黑龙江省</option>
                                          <option value="9">上海市</option>
                                          <option value="10">江苏省</option>
                                          <option value="11">浙江省</option>
                                          <option value="12">安徽省</option>
                                          <option value="13">福建省</option>
                                          <option value="14">江西省</option>
                                          <option value="15">山东省</option>
                                          <option value="16">河南省</option>
                                          <option value="17">湖北省</option>
                                          <option value="18">湖南省</option>
                                          <option value="19">广东省</option>
                                          <option value="20">广西壮族自治区</option>
                                          <option value="21">海南省</option>
                                          <option value="22">重庆市</option>
                                          <option value="23">四川省</option>
                                          <option value="24">贵州省</option>
                                          <option value="25">云南省</option>
                                          <option value="26">西藏自治区</option>
                                          <option value="27">陕西省</option>
                                          <option value="28">甘肃省</option>
                                          <option value="29">青海省</option>
                                          <option value="30">宁夏回族自治区</option>
                                          <option value="31">新疆维吾尔自治区</option>
                                          <option value="32">台湾省</option>
                                          <option value="33">香港特别行政区</option>
                                        </select>
                                    </td>
                                    <td>运输单位所在市</td>
                                    <td>
                                        <label class="sr-only" for="city_name">所在市：</label>
                                        <select type="text" class="form-control input-md required-cn" name="transport_unit_city" id="city_name" onchange="sel_county(this.options[this.options.selectedIndex].value)">
                                            <option>请选择所在市</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>    
                                    <td>运输单位所在区县</td>
                                    <td>
                                        <label class="sr-only" for="county_name">所在县：</label>
                                        <select type="text" class="form-control input-md required-cn" name="transport_unit_county" id="county_name" onchange="county_code_jurisdiction(this.options[this.options.selectedIndex].value)">     
                                            <option>请选择所在区县</option>
                                        </select>
                                    </td>
                                    <td>运输单位所在区县代码</td>
                                    <td>
                                        <label class="sr-only" for="transport_unit_county_code">区县代码：</label>
                                        <select type="text" class="form-control input-md required-cn" name="transport_unit_county_code" id="transport_unit_county_code">
                                            <option>区县代码</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位管辖权属</td>
                                    <td>
                                        <label class="sr-only" for="jurisdiction_id">管辖权属：</label>
                                        <select type="text" class="form-control input-md required-cn" name="jurisdiction_id" id="jurisdiction_id">
                                        <option>管辖权属</option>
                                    </td>
                                    <td>运输单位所属行业</td>
                                    <td>
                                        <select type="text" class="form-control input-md" name="transport_unit_trade" id="transport_unit_trade">
                                        <option value=1></option>
                                        <option value=2></option>
                                        <option value=3></option>
                                        <option value=4></option>
                                        <option value=5></option>
                                        <option value=6></option>
                                        <option value=7></option>
                                        <option value=8></option>
                                        <option value=9></option>
                                        <option value=10></option>
                                        <option value=11></option>
                                        <option value=12></option>
                                        <option value=13></option>
                                        <option value=14></option>
                                        <option value=15></option>
                                        <option value=16></option>
                                        <option value=17></option>
                                        <option value=18></option>
                                        <option value=19></option>
                                        <option value=20></option>
                                        <option value=21></option>
                                        <option value=22></option>
                                        <option value=23></option>
                                        <option value=24></option>
                                        <option value=25></option>
                                        <option value=26></option>
                                        <option value=27></option>
                                        <option value=28></option>
                                        <option value=29></option>
                                        <option value=30></option>
                                        <option value=31></option>
                                        <option value=32></option>
                                        <option value=33></option>
                                        <option value=34></option>
                                        <option value=35></option>
                                        <option value=36></option>
                                        <option value=37></option>
                                        <option value=38></option>
                                        <option value=39></option>
                                        <option value=40></option>
                                        <option value=41></option>
                                        <option value=42></option>
                                        <option value=43></option>
                                        <option value=44></option>
                                        <option value=45></option>
                                        <option value=46></option>
                                        <option value=47></option>
                                        <option value=48></option>
                                        <option value=49></option>
                                        <option value=50></option>
                                        <option value=51></option>
                                        <option value=52></option>
                                        <option value=53></option>
                                        <option value=54></option>
                                        <option value=55></option>
                                        <option value=56></option>
                                        <option value=57></option>
                                        <option value=58></option>
                                        <option value=59></option>
                                        <option value=60></option>
                                        <option value=61></option>
                                        <option value=62></option>
                                        <option value=63></option>
                                        <option value=64></option>
                                        <option value=65></option>
                                        <option value=66></option>
                                        <option value=67></option>
                                        <option value=68></option>
                                        <option value=69></option>
                                        <option value=70></option>
                                        <option value=71></option>
                                        <option value=72></option>
                                        <option value=73></option>
                                        <option value=74></option>
                                        <option value=75></option>
                                        <option value=76></option>
                                        <option value=77></option>
                                        <option value=78></option>
                                        <option value=79></option>
                                        <option value=80></option>
                                        <option value=81></option>
                                        <option value=82></option>
                                        <option value=83></option>
                                        <option value=84></option>
                                        <option value=85></option>
                                        <option value=86></option>
                                        <option value=87></option>
                                        <option value=88></option>
                                        <option value=89></option>
                                        <option value=90></option>
                                        <option value=91></option>
                                        <option value=92></option>
                                        <option value=93></option>
                                        <option value=94></option>
                                        <option value=95></option>
                                        <option value=96></option>
                                        <option value=97></option>
                                        <option value=98></option>
                                        <option value=99></option>
                                        <option value=100></option>
                                        <option value=101></option>
                                        <option value=102></option>
                                        <option value=103></option>
                                        <option value=104></option>
                                        <option value=105></option>
                                        <option value=106></option>
                                        <option value=107></option>
                                        <option value=108></option>
                                        <option value=109></option>
                                        <option value=110></option>
                                        <option value=111></option>
                                        <option value=112></option>
                                        <option value=113></option>
                                        <option value=114></option>
                                        <option value=115></option>
                                        <option value=116></option>
                                        <option value=117></option>
                                        <option value=118></option>
                                        <option value=119></option>
                                        <option value=120></option>
                                        <option value=121></option>
                                        <option value=122></option>
                                        <option value=123></option>
                                        <option value=124></option>
                                        <option value=125></option>
                                        <option value=126></option>
                                        <option value=127></option>
                                        <option value=128></option>
                                        <option value=129></option>
                                        <option value=130></option>
                                        <option value=131></option>
                                        <option value=132></option>
                                        <option value=133></option>
                                        <option value=134></option>
                                        <option value=135></option>
                                        <option value=136></option>
                                        <option value=137></option>
                                        <option value=138></option>
                                        <option value=139></option>


                                        </select>   
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位乡镇街道</td>
                                    <td>
                                        <input type="text" class="form-control input-md" name="transport_unit_street" id="transport_unit_street">
                                    </td>
                                    <td>运输单位注册类型</td>
                                    <td>
                                        <select type="text" class="form-control input-md" name="transport_unit_registration_type" id="transport_unit_registration_type">
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>

                                        </select>  
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位企业规模</td>
                                    <td>
                                        <select type="text" class="form-control input-md" name="transport_unit_enterprise_scale" id="transport_unit_enterprise_scale">
                                            <option>特大型</option>
                                            <option>大型一档</option>
                                            <option>大型二档</option>
                                            <option>中型一档</option>
                                            <option>中型二档</option>
                                            <option>小型</option>
                                            <option>其他</option>
                                        </select>  
                                    </td>
                                    <td>运输单位许可证编号</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="transport_unit_license_num" id="transport_unit_license_num">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位许可证文号</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="transport_unit_reference_num" id="transport_unit_reference_num">
                                    </td>
                                    <td>许可证发证机关</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="license_issuing_authority" id="license_issuing_authority">
                                    </td>
                                </tr>
                                <tr>
                                    <td>许可证发证日期</td>
                                    <td>
                                        <input type="date" class="form-control input-md required-cn" name="license_issuing_date" id="license_issuing_date">
                                    </td>
                                    <td>许可证有效期至</td>
                                    <td>
                                        <input type="date" class="form-control input-md required-cn" name="license_expiry_date" id="license_expiry_date">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位环保联系人姓名</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="transport_unit_contacts_name" id="transport_unit_contacts_name">
                                    </td>
                                    <td>运输单位环保联系人电话</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="transport_unit_contacts_phone" id="transport_unit_contacts_phone">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位法人代码</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="transport_unit_legal_person_code" id="transport_unit_legal_person_code">
                                    </td>
                                    <td>运输单位法人姓名</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="transport_unit_legal_person_name" id="transport_unit_legal_person_name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位法人电话</td>
                                    <td>
                                        <input type="text" class="form-control input-md required-cn" name="transport_unit_legal_person_phone" id="transport_unit_legal_person_phone">
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
                                        <input type="text" class="form-control input-md number-cn" name="transport_unit_longitude" id="transport_unit_longitude">
                                    </td>
                                </tr>
                                <tr>
                                    <td>运输单位中心纬度</td>
                                    <td>
                                        <input type="text" class="form-control input-md number-cn" name="transport_unit_latitude" id="transport_unit_latitude">
                                    </td>
                                </tr>
                            </table>
                        </big>
                    </div>

                    <center>
                        <button type="submit" class="btn btn-warning btn-lg">提交</button>
                    </center>
                </form>

                <script type="text/javascript" src="/DWMS/www/Public/js/jquery-myvalidate.js"></script>
                <script>
                $("#transportForm").validate();
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