<?php
session_start();
include_once 'conn.php';
$id=$_GET["id"];
mysql_query("update xinwentongzhi set dianjilv=dianjilv+1 where id=$id");
?>
<!doctype html>
<html>
<head>
<meta >
<title>内容详细</title>
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
<h2 class="bottom-0 page-title">内容详细</h2>
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
					$sql="select * from xinwentongzhi where id=".$id;
					$query=mysql_query($sql);
					 $rowscount=mysql_num_rows($query);
					  if($rowscount==0)
					  {}
					  else
					  {
					?>
            <table width="97%" border="0" align="center" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" class="newsline" style="border-collapse:collapse">
              <tr>
                <td height="52" align="center"><span class="STYLE1"><?php echo mysql_result($query,0,"biaoti"); ?> (被点击<?php echo mysql_result($query,0,"dianjilv"); ?>次)</span></td>
              </tr>
              <tr>
                <td height="104"><?php echo mysql_result($query,0,"neirong");?></td>
              </tr>
              <tr>
                <td align="right"><input type="button" onClick="javaScript:history.back();" value="返回" /></td>
              </tr>
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
