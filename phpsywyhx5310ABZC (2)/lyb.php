<?php
include_once 'conn.php';
session_start();
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('对不起，请您先登录！');location.href='index.php';</script>";
	exit;
}

$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$zhaopian=$_POST["zhaopian"];$xingming=$_POST["xingming"];$liuyan=$_POST["liuyan"];
	$sql="insert into liuyanban(zhanghao,zhaopian,xingming,liuyan) values('$zhanghao','$zhaopian','$xingming','$liuyan') ";
	mysql_query($sql);
	echo "<script>javascript:alert('留言成功!');location.href='lyblist.php';</script>";
}
?>
<!doctype html>
<html>
<head>
<meta >
<title>商用网页</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="描述">
<meta name="author" content="yanglin">
<link href="qtimages/css/bootstrap.css" rel="stylesheet">
<link href="qtimages/css/style.css" rel="stylesheet">
<link href="qtimages/css/fonts.css" rel="stylesheet">
<link href="qtimages/css/animate.css" rel="stylesheet">
<link href="qtimages/css/plugins.css" rel="stylesheet">
<link href="qtimages/css/responsive.css" rel="stylesheet">
<link href="qtimages/css/settings.css" rel="stylesheet">
<link href="qtimages/css/captions.css" rel="stylesheet">



<script src="js/jquery.js"></script>


<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE1 {
	color: #009933;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>
</head>
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("请输入账号");document.form1.zhanghao.focus();return false;}if(document.form1.xingming.value==""){alert("请输入姓名");document.form1.xingming.focus();return false;}if(document.form1.liuyan.value==""){alert("请输入留言");document.form1.liuyan.focus();return false;}
}

</script>
<body>
<div id="wrap">
  <div class="main-inner-content">
    <header id="header" class="section cover header-bg" data-bg="qtimages/slider.jpg">
    
     
      <?php include 'qttop.php';?>
    </header>
    <div class="page-heading">
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="page-title-area">
<h2 class="bottom-0 page-title">在线留言</h2>
</div>
</div>
<div class="col-md-6 text-right">
<div class="breadcrumbs">
<ul class="bottom-0 list-unstyled">
<li><a href="#"><i class="fa fa-home"></i></a></li>
<li><a href="lyblist.php">查看留言</a></li>

</ul>
</div>
</div>
</div>
</div>
</div>
    <div class="content-sidebar" id="content-wrap">
<div class="container">
<div class="row nospace">







		<table width="96%" border="1" align="left" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" style="border-collapse:collapse">
            <form name="form1" method="post" action="">
              <tr>
                <td>账号：</td>
                <td><input name='zhanghao' type='text' id='zhanghao' value='<?php echo $_SESSION["username"];?>' />
                  &nbsp;*</td>
              </tr>
              <tr>
                <td>照片：</td>
                <td><input name="zhaopian" type="radio" value="1" checked>
                                  <img src="img/1.gif" width="64" height="71">
                                  <input type="radio" name="zhaopian" value="2">
                                  <img src="img/2.gif" width="64" height="71">
                                  <input type="radio" name="zhaopian" value="3">
                                  <img src="img/3.gif" width="64" height="71">
                                  <input type="radio" name="zhaopian" value="4">
                                  <img src="img/4.gif" width="64" height="71">
                                  <input type="radio" name="zhaopian" value="5">
                                  <img src="img/5.gif" width="64" height="71"></td>
              </tr>
              <tr>
                <td>姓名：</td>
                <td><input name='xingming' type='text' id='xingming' value='<?php echo $_SESSION["xm"];?>' />
                  &nbsp;*</td>
              </tr>
              <tr>
                <td>留言：</td>
                <td><textarea name='liuyan' cols='70' rows='8' id='liuyan'></textarea>
                  &nbsp;*</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input type="hidden" name="addnew" value="1" />
                    <input name="Submit" type="submit" onClick="return check();" value="确定" />
                    <input name="Submit2" type="reset"  value="重置" /></td>
              </tr>
            </form>
          </table>
					
					
					
					


		
		
</div> 
</div> 
</div>

 <div id="page-content">
      
     
      
     
     
     <?php include 'yqlj.php';?>
    </div>
	
  </div>
 <?php include 'qtdown.php';?>
  <div class="sb-slidebar sb-right">
    <div class="sb-menu-trigger"></div>
  </div>
</div>
<script src="js/easing.js"></script> 
<script src="js/hoverIntent.js"></script> 
<script src="js/superfish.js"></script> 
<script src="js/bootstrap.js"></script> 
<script src="js/countto.js"></script> 
<script src="js/waypoint.js"></script> 
<script src="js/typer.js"></script> 
<script src="js/flexslider.js"></script> 
<script src="js/caroufredsel.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/donutchart.js"></script> 
<script src="js/magnificpopup.js"></script> 
<script src="js/masonry.js"></script> 
<script src="js/sidebar.js"></script> 
<script src="js/tweecool.js"></script> 
<script src="js/isotope.js"></script> 
<script src="js/contact.js"></script> 
<script src="js/functions.js"></script> 
<script src="js/jquery.plugins.min.js"></script> 
<script src="js/jquery.revolution.min.js"></script>
</body>
</html></html>
