<?php
session_start();
include_once 'conn.php';

$id=$_GET["id"];

?>
<!doctype html>
<html>
<head>
<meta >
<title>企业招聘</title>
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
<h2 class="bottom-0 page-title">企业招聘</h2>
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
$sql="select * from enterprisehire where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline"> 
      <tr>
	  <td width='11%'>岗位编号：</td><td width='39%'><?php echo mysql_result($query,0,stationnumbers);?></td>    <td width='11%'>岗位名称：</td><td width='39%'><?php echo mysql_result($query,0,stationnamec);?></td></tr><tr>    <td width='11%'>薪资待遇：</td><td width='39%'><?php echo mysql_result($query,0,wagesdaiyu);?></td>    <td width='11%'>学历要求：</td><td width='39%'><?php echo mysql_result($query,0,qualificationrequirement);?></td></tr><tr>    <td width='11%'>年龄要求：</td><td width='39%'><?php echo mysql_result($query,0,agerequirement);?></td>    <td width='11%'>性别要求：</td><td width='39%'><?php echo mysql_result($query,0,genderrequirement);?></td></tr><tr>    <td width='11%'>工作经验：</td><td width='39%'><?php echo mysql_result($query,0,jobjingyan);?></td>    <td width='11%'>工作方式：</td><td width='39%'><?php echo mysql_result($query,0,jobmode);?></td></tr><tr>    <td width='11%'>企业名称：</td><td width='39%'><?php echo mysql_result($query,0,enterprisenamec);?></td>    <td width='11%'>联系电话：</td><td width='39%'><?php echo mysql_result($query,0,lianxitel);?></td></tr><tr>    <td width='11%'>企业地址：</td><td width='39%'><?php echo mysql_result($query,0,enterpriseaddress);?></td>    <td>&nbsp;</td><td>&nbsp;</td></tr><tr><td colspan=4 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" class='hsgqiehuanshitu'  /> <input type=button name=Submit52 value=打印 onClick="javascript:window.print()" class='hsgqiehuanshitu' /> <input type=button name=Submit53 class='hsgqiehuanshitu' value=招聘报名 onClick="javascript:location.href='hiresignupadd.php?id=<?php echo $_GET["id"];?>';"  /></td></tr>
    
     
  </table>

<?php
	}
?>
					
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

