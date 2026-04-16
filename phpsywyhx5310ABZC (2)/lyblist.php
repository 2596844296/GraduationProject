<?php
include_once 'conn.php';
session_start();
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('对不起，请您先登录！');location.href='index.php';</script>";
	exit;
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
<li><a href="lyb.php">我要留言</a></li>

</ul>
</div>
</div>
</div>
</div>
</div>
    <div class="content-sidebar" id="content-wrap">
<div class="container">
<div class="row nospace">







		<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#ADCEEF" style="border-collapse:collapse">
            <?php
					$sql="select * from liuyanban where 1=1";
					$sql=$sql." order by id desc";
  					$query=mysql_query($sql);
	 				 $rowscount=mysql_num_rows($query);
					 if($rowscount==0)
  {}
  else
  {
  $pagelarge=5;//每页行数；
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
					 ?>
            <tr>
              <td width="11" rowspan="3" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
              <td width="85" rowspan="3" align="center" valign="middle"><img width='70'height='70' src=img/<?php echo mysql_result($query,$i,"zhaopian");?>.gif border=0> </td>
              <td height="20" colspan="2" align="left" valign="middle">&nbsp; &nbsp; 留言于:<?php echo mysql_result($query,$i,"addtime");?> &nbsp;</td>
              <td width="12" rowspan="3" valign="top" style="width: 10px"><!--DWLayoutEmptyCell-->&nbsp;</td>
            </tr>
            <tr>
              <td height="78" align="left" valign="top">&nbsp;<?php echo mysql_result($query,$i,"liuyan");?></td>
              <td align="left" valign="top"><p>回复：</p>
                  <p><?php echo mysql_result($query,$i,"huifu");?></p></td>
            </tr>
            <tr>
              <td colspan="2" align="left" valign="middle" style="height: 25px">&nbsp; &nbsp;账号：<?php echo mysql_result($query,$i,"zhanghao");?> &nbsp; &nbsp;姓名：<?php echo mysql_result($query,$i,"xingming");?>&nbsp;&nbsp;</td>
            </tr>
            <?php
						  }
  	}
  ?>
          </table>
            <p align="center"><a href="lyblist.php?pagecurrent=1">首页</a>, <a href="lyblist.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="lyblist.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="lyblist.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 以上数据共
              <?php
		echo $rowscount;
	?>
              条,
  <input type="button" name="Submit2" onClick="javascript:window.print();" value="打印本页" style=" height:38px; border:solid 1px #000000; color:#666666" />
            </p>
					
					
					
					


		
		
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
