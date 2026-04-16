<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>商用网页</title>
    <link rel="stylesheet" href="images/css/pintuer.css">
    <link rel="stylesheet" href="images/css/admin.css">
    <script src="images/js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
    <div class="header bg-main">
        <div class="logo margin-big-left fadein-top">
            <h1><img src="images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />商用网页</h1>
        </div>
        <div class="head-l"><a class="button button-little bg-green" href="index.php" target="_parent"><span class="icon-home"></span> 前台首页</a>
             &nbsp;&nbsp;<a href="#" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a>  
            &nbsp;&nbsp;<a class="button button-little bg-red" href="logout.php"><span class="icon-power-off"></span> 退出登录</a> </div>
			 <div class="head-l"></div>
    </div>
    <div class="leftnav">
        <div class="leftnav-title text-center"><strong><span class="icon-list"></span>菜单列表</strong></div>
<?php
if ($_SESSION["cx"]=="超级管理员" || $_SESSION["cx"]=="普通管理员"){include_once 'left_admins.php';}if ($_SESSION["cx"]=="用户"){include_once 'left_users.php';}
?>
    </div>
    <script type="text/javascript">
        $(function() {
            $(".leftnav h2").click(function() {
                $(this).next().slideToggle(200);
                $(this).toggleClass("on");
            })
            $(".leftnav ul li a").click(function() {
                $("#a_leader_txt").text($(this).text());
                $(".leftnav ul li a").removeClass("on");
                $(this).addClass("on");
            })
        });
    </script>
    <ul class="bread">
        <li><a  class="icon-home"> 首页</a></li>
        <li><a  id="a_leader_txt">网站信息</a></li>
         <li><b></b><span style="color:red;"><span class="icon-user"></span>&nbsp;&nbsp;当前用户： <?php echo $_SESSION['username'];?>[<?php echo $_SESSION['cx'];?>]</php></span></li> 
    </ul>
    <div class="admin">
        <iframe scrolling="auto" rameborder="0" src="sy/sy.php" name="hsgmain" width="100%" height="100%"></iframe>
    </div>
</body>
</html>
