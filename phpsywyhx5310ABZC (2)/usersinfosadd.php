<?php
session_start();
//xuxyxaodenxglxxu
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$usernames=$_POST["usernames"];    $names=$_POST["names"];    $gender=$_POST["gender"];    $pwd=$_POST["pwd"];    $phone=$_POST["phone"];    $idcard=$_POST["idcard"];    $memo=$_POST["memo"];    
	
	
	
	
	
	$sql="insert into usersinfos(usernames,names,gender,pwd,phone,idcard,memo) values('$usernames','$names','$gender','$pwd','$phone','$idcard','$memo') ";
	mysql_query($sql);
	
	
	echo "<script>javascript:alert('操作成功!');history.back();</script>";



}
?>
<!doctype html>
<html>
<head>
<meta >
<title>用户信息</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<link rel="stylesheet" href="images/hsgcommon/divqt.css" type="text/css">
<link rel="stylesheet" href="images/hsgcommon/commonqt.css" type="text/css">



<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
	function check()
{
	if(document.form1.usernames.value==""){alert("请输入用户名");document.form1.usernames.focus();return false;}    if(document.form1.names.value==""){alert("请输入姓名");document.form1.names.focus();return false;}    if(!(/^\d{15}$|^\d{18}$|^\d{17}[xX]$/.test(document.form1.idcard.value))){alert("身份证必需身份证格式");document.form1.idcard.focus();return false;}    
}
	function gow()
	{
		location.href='usersinfosadd.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
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
<h2 class="bottom-0 page-title">用户信息</h2>
</div>
</div>
<div class="col-md-6 text-right">
<!--<div class="breadcrumbs">
<ul class="bottom-0 list-unstyled">
<li><a href="#"><i class="fa fa-home"></i></a></li>
<li><a href="#">项目介绍</a></li>
<li><span>关于我们</span></li>
</ul>
</div>-->
</div>
</div>
</div>
</div>
    <div class="content-sidebar" id="content-wrap">
<div class="container">
<div class="row nospace">

 

<!--<script src="./qtimages/jquery-1.11.3.min.js"></script>
    <script src="./qtimages/sweetalert.min.js"></script>
    <script src="./qtimages/x-sweetalert.js"></script>
	<link rel="stylesheet" type="text/css" href="./qtimages/sweetalert.css">-->
<form id="form1" name="form1" method="post" action="">
<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline">    
	<tr><td>用户名：</td><td><input name='usernames' type='text' id='usernames' value='' class="form-control" /><div style="margin-top:16px;">&nbsp;*</div></td></tr>    <tr><td>姓名：</td><td><input name='names' type='text' id='names' value='' class="form-control" /><div style="margin-top:16px;">&nbsp;*</div></td></tr>    <tr><td>性别：</td><td><select name='gender' id='gender' class="form-control"><option value="男">男</option><option value="女">女</option></select></td></tr>    <tr><td>密码：</td><td><input name='pwd' type='text' id='pwd' value='' class="form-control" /></td></tr>    <tr><td>手机：</td><td><input name='phone' type='text' id='phone' value='' class="form-control" /></td></tr>    <tr><td>身份证：</td><td><input name='idcard' type='text' id='idcard' value='' class="form-control" /><div style="margin-top:16px;">&nbsp;必需身份证格式</div></td></tr>    <tr><td>备注：</td><td><input name='memo' type='text' id='memo' value='' class="form-control" /></td></tr>    
    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="确定" onclick="return check();"  class="content-form-signup" />
      <input type="reset" name="Submit2" value="重置" class="content-form-signup" /></td>
    </tr>
  </table>
</form>


					
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
