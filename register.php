﻿<?
require "function.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Bentutu，Ubuntu,Linux,微博" />
<meta name="description" content="中国Ubuntu和Linux用户微博平台，快乐分享业界资讯！" />
<title>注册微博_Bentutu ME - 中国Ubuntu和Linux用户微博平台</title>
<link rel="shortcut icon" href="http://bentutu.com/me/Public/images/favicon.ico" />
<script type="text/javascript">var etuser='{"siteurl":"http://bentutu.com/me/index.php?s=","pubdir":"http://bentutu.com/me/Public","setok":"-1","my_uid":"","user_name":"","nickname":"","space":""}';var stalk='';</script>
<script type="text/javascript" src="./javascript/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="./javascript/common.js"></script>
<script type="text/javascript" src="./javascript/extends.js"></script>
<script type="text/javascript" src="./javascript/ye_dialog.js"></script>
<link rel="stylesheet" type="text/css" href="http://bentutu.com/me/Public/js/highslide/highslide.css" />
<link rel="stylesheet" type="text/css" href="http://bentutu.com/me/Public/images/style.css" />
<!--[if lte IE 6]>
<style type="text/css">
#header .left{filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled='true',sizingMethod='image',src='http://bentutu.com/me/Public/images/logo.png');background:none;cursor:pointer}
#header .topmenubg{filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled='true',sizingMethod='image',src='http://bentutu.com/me/Public/images/topmenu.png');background:none;}
#navbg {filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled='true', sizingMethod='scale',src='http://bentutu.com/me/Public/images/headbg.png');background:none;}
#sidebar .homestabs .menu li .arrHover{filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,sizingMethod=image,src='http://bentutu.com/me/Public/images/sidemenuArr_over.png');background:none;}
#sidebar .homestabs .menu li .arrCurt{filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,sizingMethod=image,src='http://bentutu.com/me/Public/images/sidemenuArr.png');background:none}
#sidebar .sect {filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,sizingMethod=scale, src='http://bentutu.com/me/Public/images/dot.png');background:none;}
.newst {filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(enabled=true,sizingMethod=image,src='http://bentutu.com/me/Public/images/newst.png');background:none;}
</style>
<![endif]-->
<style type="text/css"></style>
</head>

<body>
<div id="navbg"></div>
<div id="container" class="newlook">
<div id="header">
    <div id="navigation">
        <ul>

                    <li class="fright" ><a href="http://bentutu.com/me/index.php?s=/register">注册</a></li>
            <li class="fright" ><a href="http://bentutu.com/me/index.php?s=/login">登陆</a> | </li>
                </ul>
    </div>
    <a href="http://bentutu.com/me/index.php?s=/">
    <div class="left"></div></a>
    </div>
<div id="register">
    <div class="indexh" style="margin-bottom:20px">
        <div class="tabon">快速注册</div>
        <div class="taboff"><a href="http://bentutu.com/me/index.php?s=/login">登陆微博</a></div>
        <div class="taboff"><a href="http://bentutu.com/me/index.php?s=/reset">忘记密码</a></div>
    </div>
    <table border="0" style="width:90%;margin-left:40px">
    <tr><td valign="top">

    <h3 class="tt">欢迎您加入Bentutu ME，请完整填写以下信息进行注册。</h3>
            <form method="post" action="registerdeal.php" class="lf">
    <table class="regtb">
    	<? if ( $_SESSION['lasterr'] ) { ?>
				<tr height="50px">
            <th><label class="label_input" for="username">错误提示</label></th>
            <td width="210px"></td>
            <td><?= $_SESSION['lasterr'] ?></td>
        </tr>
      <? } ?>
        <tr height="50px">
            <th><label class="label_input" for="username">用户帐号</label></th>
            <td width="210px"><input tabindex="2" type="text" id="username" name="username" class="input_text" value="" maxlength="12"/></td>
            <td>帐户名长度最多 6 个汉字或 12 个字符</td>

        </tr>
        <tr height="30px">
            <td></td>
            <td colspan="2"><span class="grey">您的网址：http://bentutu.com/me/index.php?s=/<span id="wbadd"></span></span></td>
        </tr>
        <tr height="50px">
            <th><label class="label_input" for="mailadres">电子邮箱</label></th>
            <td><input tabindex="4" type="text" id="mailadres" name="mailadres" class="input_text" value="" /></td>

            <td>电子邮箱是找回密码的重要途径，请正确填写</td>
        </tr>
        <tr height="50px">
            <th><label class="label_input" for="password1">注册密码</label></th>
            <td><input tabindex="5" type="password" id="password1" name="password1" class="input_text" value="" maxlength="20" style="ime-mode:disabled" onpaste="return false;"/></td>
            <td>密码长度4-20位，字母区分大小写</td>
        </tr>

        <tr height="50px">
            <th><label class="label_input" for="password2">确认密码</label></th>
            <td><input tabindex="6" type="password" id="password2" name="password2" class="input_text" value="" maxlength="20" style="ime-mode:disabled" onpaste="return false;"/></td>
            <td>请再次输入一次注册密码，以确保正确</td>
        </tr>
        <tr height="50px">
            <td></td>
            <td colspan="2">            
            	<input tabindex="7" type="button" class="button1" value="立即注册" onclick="check_register();" />
            </td>
        </tr>
    </table>
    <input type="hidden" name="__hash__" value="0fa02fa5afd41eaedf383d33e2d3fadf" /></form>
    </td></tr>
    </table>
</div>
<script type="text/javascript">
$("#username").keyup(function(){
    $('#username').val($('#username').val().replace(/\s/ig,""));
    $('#wbadd').html($('#username').val());
    $('#username').val($('#username').val().slice(0,12));
    $('#wbadd').html($('#username').val().slice(0,12));
});
$("#mailadres").keyup(function() {$('#mailadres').val($('#mailadres').val().replace(/\s/ig,""));});
$("#password1").keyup(function() {$('#password1').val($('#password1').val().replace(/\s/ig,""));});
$("#password2").keyup(function() {$('#password2').val($('#password2').val().replace(/\s/ig,""));});
</script>
    </div>
<div class="bottomLinks">
    <div class="bL_List">

        <div class="bL_info">  
        <h4>找找感兴趣的人</h4>
        <ul>
            <li class="MIB_linkar"><a href="http://bentutu.com/me/index.php?s=/Find">找朋友</a></li>
            <li class="MIB_linkar"><a href="http://bentutu.com/me/index.php?s=/Hot">达人排行榜</a></li>
            <li class="MIB_linkar"><a href="http://bentutu.com/me/index.php?s=/Hot?c=">同城达人榜</a></li>
            <li class="MIB_linkar"><a href="http://bentutu.com/me/index.php?s=/Find/invite">邀请好友加入</a></li>

        </ul>
        </div>
        <div class="bL_info">  
        <h4>大家正在说什么</h4>
        <ul>
            <li class="MIB_linkar"><a href="http://bentutu.com/me/index.php?s=/Pub">广播大厅</a></li>
            <li class="MIB_linkar"><a href="http://bentutu.com/me/index.php?s=/Pub?t=hot">热门广播</a></li>
            <li class="MIB_linkar"><a href="http://bentutu.com/me/index.php?s=/Pub?t=city&c=">同城广播</a></li>

            <li class="MIB_linkar"><a href="http://bentutu.com/me/index.php?s=/Topic">热门话题榜</a></li>
        </ul>
        </div>
        <div class="bL_info bL_io3">  
        <h4>微博更多玩法</h4>
        <ul>
            <li class="MIB_linkar"><a href="http://bentutu.com/me/m">手机登陆</a></li>
            <li class="MIB_linkar"><a href="##">短信更新</a></li>

            <li class="MIB_linkar"><a href="##">下载客户端</a></li>
            <li class="MIB_linkar"><a href="http://bentutu.com/me/index.php?s=/Setting/theme">设置个性模版</a></li>
        </ul>
        </div>
        <div class="bL_info bL_io4">  
        <h4>认证&合作</h4>
        <ul>

            <li class="MIB_linkar"><a href="http://bentutu.com/me/index.php?s=/Index/vip">微博认证</a></li>
            <li class="MIB_linkar"><a href="http://bentutu.com/me/index.php?s=/Index/about">关于我们</a></li>
            <li class="MIB_linkar"><a href="http://bentutu.com/me/index.php?s=/Index/faq">新手帮助</a></li>
            <li class="MIB_linkar">统计代码</li>
        </ul>
        </div>
    </div>

</div>
<div class="gotop"><button onclick="indextop();" title="返回顶部"><span>返回顶部</span></button></div>
<script type="text/javascript">$(document).ready(function(){$('#footer').append('<a href="http://www.miibeian.gov.cn" target="_blank">正在备案...</a>')});</script>
</body>
</html>