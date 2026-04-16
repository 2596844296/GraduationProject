<?php
session_start();
include_once 'conn.php';

?>
<!doctype html>
<html>
<head>
<meta >
<title>企业信息</title>
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
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<link rel="stylesheet" href="images/hsgcommon/divqt.css" type="text/css">

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
<h2 class="bottom-0 page-title">企业信息</h2>
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

 <form id="form1" name="form1" method="post" action="">
  搜索: 企业编号：<input name="enterprisenumbers" type="text" id="enterprisenumbers" class="form-control2" /> 企业名称：<input name="enterprisenamec" type="text" id="enterprisenamec" class="form-control2" /> 企业类型：<select name='enterprisetypes' id='enterprisetypes' class="form-control2"></select> 所属行业：<select name='fields' id='fields' class="form-control2"></select>
  <input type="submit" name="Submit" value="查找" class='hsgqiehuanshitu' />&nbsp;<input type='button' name='Submit5' value='切换视图' class='hsgqiehuanshitu' onClick="javascript:location.href='enterpriseinfoslisttp.php';" /> 
</form>
<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>企业编号</td><td bgcolor='#CCFFFF'>企业名称</td><td bgcolor='#CCFFFF'>图片</td><td bgcolor='#CCFFFF'>视频宣传</td><td bgcolor='#CCFFFF'>企业类型</td><td bgcolor='#CCFFFF'>所属行业</td><td bgcolor='#CCFFFF'>负责人</td><td bgcolor='#CCFFFF'>联系电话</td><td bgcolor='#CCFFFF'>注册资金</td><td bgcolor='#CCFFFF'>地址</td>
    
    <td width="30" align="center" bgcolor="#CCFFFF">操作</td>
  </tr>
  <?php 
    $sql="select * from enterpriseinfos where 1=1";
  if ($_POST["enterprisenumbers"]!=""){$nreqenterprisenumbers=$_POST["enterprisenumbers"];$sql=$sql." and enterprisenumbers like '%$nreqenterprisenumbers%'";}if ($_POST["enterprisenamec"]!=""){$nreqenterprisenamec=$_POST["enterprisenamec"];$sql=$sql." and enterprisenamec like '%$nreqenterprisenamec%'";}if ($_POST["enterprisetypes"]!=""){$nreqenterprisetypes=$_POST["enterprisetypes"];$sql=$sql." and enterprisetypes like '%$nreqenterprisetypes%'";}if ($_POST["fields"]!=""){$nreqfields=$_POST["fields"];$sql=$sql." and fields like '%$nreqfields%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
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
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,enterprisenumbers);?></td><td><?php echo mysql_result($query,$i,enterprisenamec);?></td><td width='80'><a href="<?php echo mysql_result($query,$i,pic) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,pic) ?>' width='80' height='88' border='0'></a></td><td><a href="play.php?spwj=<?php echo mysql_result($query,$i,videosadvertising);?>" target='_blank'>播放</a></td><td><?php echo mysql_result($query,$i,enterprisetypes);?></td><td><?php echo mysql_result($query,$i,fields);?></td><td><?php echo mysql_result($query,$i,incharger);?></td><td><?php echo mysql_result($query,$i,lianxitel);?></td><td><?php echo mysql_result($query,$i,signinfund);?></td><td><?php echo mysql_result($query,$i,address);?></td>
    
    <td width="30" align="center"><a href="enterpriseinfosdetail.php?id=<?php echo mysql_result($query,$i,"id");?>">详细</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php echo $rowscount;?>条,
  <input type="button" name="Submit2" onclick="javascript:window.print();" value="打印本页" class='hsgqiehuanshitu' />
</p>
<div class="fy"><a href="enterpriseinfoslist.php?pagecurrent=1">首页</a> <a href="enterpriseinfoslist.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> <a href="enterpriseinfoslist.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a> <a href="enterpriseinfoslist.php?pagecurrent=<?php echo $pagecount;?>">末页</a> 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </div>

					
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
