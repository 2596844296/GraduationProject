<?php
session_start();
//xuxyxaodenxglxxu
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$signupby=$_POST["signupby"];
    $stationnumbers=$_POST["stationnumbers"];
    $stationnamec=$_POST["stationnamec"];
    $qualificationrequirement=$_POST["qualificationrequirement"];
    $enterprisenamec=$_POST["enterprisenamec"];
    $lianxitel=$_POST["lianxitel"];
    $enterpriseaddress=$_POST["enterpriseaddress"];
    
	
	
	
	
	
	$sql="insert into hiresignup(signupby,stationnumbers,stationnamec,qualificationrequirement,enterprisenamec,lianxitel,enterpriseaddress) values('$signupby','$stationnumbers','$stationnamec','$qualificationrequirement','$enterprisenamec','$lianxitel','$enterpriseaddress') ";
	mysql_query($sql);
	
	
	echo "<script>javascript:alert('操作成功!');history.back();</script>";



}
?>
<!doctype html>
<html>
<head>
<meta >
<title>招聘报名</title>
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
	if(document.form1.signupby.value==""){alert("请先登录");document.form1.signupby.focus();return false;}
    
}
	function gow()
	{
		location.href='hiresignupadd.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
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
<h2 class="bottom-0 page-title">招聘报名</h2>
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

  <?php
 $sql="select * from enterprisehire where id=".$_GET["id"];
 $query=mysql_query($sql);
 $rowscount=mysql_num_rows($query);
 if($rowscount>0)
 {
 	$stationnumbers=mysql_result($query,0,stationnumbers);
 	$stationnamec=mysql_result($query,0,stationnamec);
 	$qualificationrequirement=mysql_result($query,0,qualificationrequirement);
 	$enterprisenamec=mysql_result($query,0,enterprisenamec);
 	$lianxitel=mysql_result($query,0,lianxitel);
 	$enterpriseaddress=mysql_result($query,0,enterpriseaddress);
 	
 }
?>

<!--<script src="./qtimages/jquery-1.11.3.min.js"></script>
    <script src="./qtimages/sweetalert.min.js"></script>
    <script src="./qtimages/x-sweetalert.js"></script>
	<link rel="stylesheet" type="text/css" href="./qtimages/sweetalert.css">-->
<form id="form1" name="form1" method="post" action="">
<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline">    
	<tr><td>报名人：</td><td><input name='signupby' type='text' id='signupby' value='<?php echo $_SESSION['username'];?>' class="form-control" readonly='readonly' /><div style="margin-top:16px;">&nbsp;*</div></td></tr>
    <tr><td>岗位编号：</td><td><input name='stationnumbers' type='text' id='stationnumbers' value='' class="form-control" /></td></tr><script language="javascript">document.form1.stationnumbers.value='<?php echo $stationnumbers?>';document.form1.stationnumbers.setAttribute("readOnly",'true');</script>
    <tr><td>岗位名称：</td><td><input name='stationnamec' type='text' id='stationnamec' value='' class="form-control" /></td></tr><script language="javascript">document.form1.stationnamec.value='<?php echo $stationnamec?>';document.form1.stationnamec.setAttribute("readOnly",'true');</script>
    <tr><td>学历要求：</td><td><input name='qualificationrequirement' type='text' id='qualificationrequirement' value='' class="form-control" /></td></tr><script language="javascript">document.form1.qualificationrequirement.value='<?php echo $qualificationrequirement?>';document.form1.qualificationrequirement.setAttribute("readOnly",'true');</script>
    <tr><td>企业名称：</td><td><input name='enterprisenamec' type='text' id='enterprisenamec' value='' class="form-control" /></td></tr><script language="javascript">document.form1.enterprisenamec.value='<?php echo $enterprisenamec?>';document.form1.enterprisenamec.setAttribute("readOnly",'true');</script>
    <tr><td>联系电话：</td><td><input name='lianxitel' type='text' id='lianxitel' value='' class="form-control" /></td></tr><script language="javascript">document.form1.lianxitel.value='<?php echo $lianxitel?>';document.form1.lianxitel.setAttribute("readOnly",'true');</script>
    <tr><td>企业地址：</td><td><input name='enterpriseaddress' type='text' id='enterpriseaddress' value='' class="form-control" /></td></tr><script language="javascript">document.form1.enterpriseaddress.value='<?php echo $enterpriseaddress?>';document.form1.enterpriseaddress.setAttribute("readOnly",'true');</script>
    
    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="确定" onclick="return check();"  class="content-form-signup" />
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
