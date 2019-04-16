<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="refresh" content="300"><title>东南大学-网络服务认证登录</title><link rel="shortcut icon" href="https://w.seu.edu.cn/Public/Images/favicon.ico"><link rel="stylesheet" href="./static/东南大学-网络服务认证登录_files/bootstrap.min.css" type="text/css" media="screen"><link rel="stylesheet" href="./static/东南大学-网络服务认证登录_files/common.css" type="text/css" media="screen"><link rel="stylesheet" href="./static/东南大学-网络服务认证登录_files/desktop.css" type="text/css" media="screen"><script type="text/javascript" src="./static/东南大学-网络服务认证登录_files/jquery-1.11.0.min.js"></script><script type="text/javascript" src="./static/东南大学-网络服务认证登录_files/jquery.cookie.js"></script><script type="text/javascript" src="./static/东南大学-网络服务认证登录_files/bootstrap.min.js"></script><script type="text/javascript" src="./static/东南大学-网络服务认证登录_files/md5.js"></script><script type="text/javascript" src="./static/东南大学-网络服务认证登录_files/base64.js"></script><script type="text/javascript" src="./static/东南大学-网络服务认证登录_files/common.js"></script><script type="text/javascript">
    </script><script type="text/javascript" src="./static/东南大学-网络服务认证登录_files/login.js"></script></head><body><div id="loading" class="loading" style="display: none;">正在加载...</div><div class="header" style="margin-top: 121.2px;"><div class="nav-bar"><ul class="nav nav-pills"><li><a href="#" target="blank">自助服务</a></li><li><a href="#">帮助</a></li></ul></div></div><div class="main"><div class="main-content"><div class="mLeft"><form id="loginForm" method="post"><div class="panel panel-default panel-transparent"><div class="panel-heading"><h3 class="panel-title">网络认证登录</h3></div><div class="panel-body"><div id="loginResult" class="alert alert-danger"></div><div class="input-group row-space"><span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span><input type="text" id="username" name="username" tabindex="1" class="form-control" placeholder="用户名"></div><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span><input type="password" id="password" name="password" tabindex="2" class="form-control" placeholder="密 码"></div><div class="info row-space"><div class="info-left"><input type="hidden" name="macauthentry" id="macauthentry" value=""><input type="hidden" name="automacauth" id="automacauth" value="1"><div id="divip"><span>登录IP: 127.0.0.1</span></div><div id="divenablemacauth" style="display:none"><label class="checkbox-inline"><input type="checkbox" class="input-sm" style="margin-top: -7px" name="enablemacauth" id="enablemacauth">免认证登录</label></div></div><div class="info-right"><span>位置: SUSCTF</span></div></div><button type="submit" id="login" class="btn btn-blue btn-sm btn-block">登 录</button></div></div></form><form id="logoutForm" method="post" style="display: none;"><div class="panel panel-default panel-transparent"><div class="panel-heading"><h3 class="panel-title">网络接入信息</h3></div><div class="panel-body"><div id="logoutResult" class="alert alert-danger"></div><p><label>用 户 名: </label><span id="logout_username"></span></p><p><label>认 证 域: </label><span id="logout_domain"></span></p><p><label>登 录 IP: </label><span id="logout_ip"></span></p><p><label>登录位置: </label><span id="logout_location"></span></p><p><label>在线时长: </label><span id="logout_timer"></span></p><span id="redirect_url" style="font-size:9pt; color: #888888; float:right;"></span><button type="submit" id="logout" class="btn btn-blue btn-sm btn-block">注 销</button></div></div></form><form id="passwordForm" method="post" style="display: none;"><div class="panel panel-default panel-transparent"><div class="panel-heading"><h3 class="panel-title">网络认证登录</h3></div><div class="panel-body"><div id="passwordResult" class="alert alert-danger"></div><div class="input-group row-space"><span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span><input type="password" id="new_password" name="new_password" tabindex="1" class="form-control" placeholder="新密码"></div><div class="input-group row-space"><span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span><input type="password" id="confirm_password" name="confirm_password" tabindex="2" class="form-control" placeholder="确认密码"></div><input type="hidden" id="username" name="username"><button type="submit" id="confirm" class="btn btn-blue btn-sm btn-block">确 定</button></div></div></form><form id="resetForm" method="post" style="display: none;"><div class="panel panel-default panel-transparent"><div class="panel-heading"><h3 class="panel-title">网络认证登录</h3></div><div class="panel-body"><div id="resetResult" class="alert alert-danger"></div><div class="input-group row-space"><span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span><input type="text" id="username" name="username" tabindex="1" class="form-control" placeholder="用户名"></div><div class="input-group row-space"><span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span><input type="text" id="mail" name="mail" tabindex="2" class="form-control" placeholder="核实邮箱地址"></div><button type="submit" id="reset" class="btn btn-blue btn-sm btn-block">发 送</button></div></div></form></div><div class="mRight"><div style="margin-top:478px; margin-left:202px;"><a href="https://pan.seu.edu.cn:9029/anyshares3accesstestbucket/f8a2250c12b011e7937b001b21bc1a84/f959419ebb6611e58ecb000c2999898e-i?response-content-disposition=attachment%3b%20filename%3d%22AnyShare%255fWindows%255fAll%255fx86%252d5.0.11%252d20170301%252dTerminator%252d3326.exe%22%3b%20filename*%3dutf%2d8%27%27AnyShare%255fWindows%255fAll%255fx86%252d5.0.11%252d20170301%252dTerminator%252d3326.exe&amp;x-eoss-length=14827864&amp;userid=AKIAI6IFWLK557WYM23A&amp;Expires=1655101367&amp;Signature=5I%2bjsD714VU1z0PMNDQnUdH7Ak8%3d" style="color: white; width:75px;" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> 下 载</a>
                &nbsp;
                <a href="https://pan.seu.edu.cn:9029/anyshares3accesstestbucket/0ed47bae12b111e7a381001b21bc1a84/0476542cbb6711e58ecb000c2999898e-i?response-content-disposition=attachment%3b%20filename%3d%22AnyShare%255fWindows%255fAll%255fx64%252d5.0.11%252d20170301%252dTerminator%252d3326.exe%22%3b%20filename*%3dutf%2d8%27%27AnyShare%255fWindows%255fAll%255fx64%252d5.0.11%252d20170301%252dTerminator%252d3326.exe&amp;x-eoss-length=20790936&amp;userid=AKIAI6IFWLK557WYM23A&amp;Expires=1655101132&amp;Signature=JELdLyq%2fwToU4%2bl8hBahcR87auM%3d" style="color: white; width:75px;" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> 下 载</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://pan.seu.edu.cn/" target="_blank" style="color: white; width:75px;" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> 进 入</a></div></div></div></div><div class="footer">Edit By PHPSTORM</div>

<?php
/**
 * Created by PhpStorm.
 * User: y4ngyy
 * Date: 19-3-19
 * Time: 下午3:44
 */

if ($_POST['username'] != null) {
    echo '<span class="notice">登录失败</span>';
    echo '<script>';
    echo "$(function(){";
    echo "var e = $('.notice');";
    echo "var head = $('.header'); ";
    echo "var x = head.offset().left+ head.width()/2-e.width()/2;";
    echo "var y = head.offset().top-e.height()-112;";
    echo "e.css({top:y,left:x});";
    echo "e.animate({top:y-100, left:x, opacity:0.1}, 1500, function(){e.remove();});";
    echo "});";
    echo '</script>';
}?>

</body></html>