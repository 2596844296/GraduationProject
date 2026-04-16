<?php
session_start();
include_once 'conn.php';

$id=$_GET["id"];
if($_GET["dztp"]=="d")
{
	$sql="update enterpriseinfos set dianzan_d=dianzan_d+1 where id=".$id;
	mysql_query($sql);
}
if($_GET["dztp"]=="c")
{
	$sql="update enterpriseinfos set dianzan_c=dianzan_c+1 where id=".$id;
	mysql_query($sql);
}
?>
<!doctype html>
<html>
<head>
<meta >
<title>��ҵ��Ϣ</title>
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
<h2 class="bottom-0 page-title">��ҵ��Ϣ</h2>
</div>
</div>
<div class="col-md-6 text-right">
<!--<div class="breadcrumbs">
<ul class="bottom-0 list-unstyled">
<li><a href="#"><i class="fa fa-home"></i></a></li>
<li><a href="#">��Ŀ����</a></li>
<li><span>��������</span></li>
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
$sql="select * from enterpriseinfos where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse" class="newsline"> 
      <tr>
	  <td width='11%' height=44>��ҵ��ţ�</td><td width='39%'><?php echo mysql_result($query,0,enterprisenumbers);?></td><td  rowspan=9 align=center><a href=<?php echo mysql_result($query,0,pic);?> target=_blank><img src=<?php echo mysql_result($query,0,pic);?> width=228 height=215 border=0></a></td></tr><tr>
    <td width='11%' height=44>��ҵ���ƣ�</td><td width='39%'><?php echo mysql_result($query,0,enterprisenamec);?></td></tr><tr>
    
    <td width='11%' height=44>��Ƶ������</td><td width='39%'><a href="play.php?spwj=<?php echo mysql_result($query,0,videosadvertising);?>">��˲���</a></td></tr><tr>
    <td width='11%' height=44>��ҵ���ͣ�</td><td width='39%'><?php echo mysql_result($query,0,enterprisetypes);?></td></tr><tr>
    <td width='11%' height=44>������ҵ��</td><td width='39%'><?php echo mysql_result($query,0,fields);?></td></tr><tr>
    <td width='11%' height=44>�����ˣ�</td><td width='39%'><?php echo mysql_result($query,0,incharger);?></td></tr><tr>
    <td width='11%' height=44>��ϵ�绰��</td><td width='39%'><?php echo mysql_result($query,0,lianxitel);?></td></tr><tr>
    <td width='11%' height=44>ע���ʽ�</td><td width='39%'><?php echo mysql_result($query,0,signinfund);?></td></tr><tr>
    <td width='11%' height=44>��ַ��</td><td width='39%'><?php echo mysql_result($query,0,address);?></td></tr><tr>
    
    <td width='11%' height=100  >��ҵ��飺</td><td width='39%' colspan=2 height=100 ><?php echo mysql_result($query,0,enterprisememo);?></td></tr>
	<tr><td colspan=3 align=center>������:<a href="enterpriseinfosdetail.php?id=<?php echo $id?>&dztp=d"><img src="qtimages/ding.gif" width="40" height="40"> <?php readzd("enterpriseinfos","dianzan_d","id",$id)?></a> <a href="enterpriseinfosdetail.php?id=<?php echo $id?>&dztp=c"><img src="qtimages/cai.gif" width="40" height="40"><?php readzd("enterpriseinfos","dianzan_c","id",$id)?></a> </td></tr><tr>      <td colspan=3 align=center><table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">
        <tr>
          <td width="50" bgcolor="#D8E8F8">���</td>
          <td width="323" align="left" bgcolor='#D8E8F8'>��������</td>
          <td width="98" align="left" bgcolor='#D8E8F8'>������</td>
          <td width="106" align="center" bgcolor="#D8E8F8">����</td>
          <td width="106" align="center" bgcolor="#D8E8F8">����ʱ��</td>
        </tr>
        <?php 
    $sqlpl="select * from pinglun where wenzhangID='$id' and biao='enterpriseinfos' order by id desc";
    $querypl=mysql_query($sqlpl);
  $rowscountpl=mysql_num_rows($querypl);
  if($rowscountpl==0)
  {}
  else
  {
	for($i=0;$i<$rowscountpl;$i++)
	{
  	?>
        <tr>
          <td width="50"><?php echo $i+1;?></td>
          <td align="left"><?php echo mysql_result($querypl,$i,pinglunneirong);?></td>
          <td align="left"><?php echo mysql_result($querypl,$i,pinglunren);?></td>
          <td width="106" align="center"><?php echo mysql_result($querypl,$i,"pingfen");?></td>
          <td width="106" align="center"><?php echo mysql_result($querypl,$i,"addtime");?></td>
        </tr>
        <?php
			}
		}
		?>
      </table></td>
    </tr>
<tr><td colspan=3 align=center><input type=button name=Submit5 value=返回  onClick="javascript:history.back()" class='hsgqiehuanshitu'  /> <input type=button name=Submit52 value=打印 onClick="javascript:window.print()" class='hsgqiehuanshitu' /> <input type=button name=Submit53 value=评论 onClick="javascript:OpenScript('hsgpinglun.php?biao=enterpriseinfos&id=<?php echo $id;?>',500,200)" class='hsgqiehuanshitu'  /><input type=button name=Submit52 value=收藏 onClick="javascript:location.href='jrsc.php?id=<?php echo $id;?>&biao=enterpriseinfos&ziduan=enterprisenamec';" class='hsgqiehuanshitu'  /><input type=button name=Submit54 value=AI咨询 onClick="javascript:location.href='enterpriseinfos_ai_chat.php?id=<?php echo $id;?>';" class='hsgqiehuanshitu'  /></td></tr>
    
     
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
<a class='bshareDiv' href='http://www.bshare.cn/share'>������ť</a><script type='text/javascript' charset='utf-8' src='http://static.bshare.cn/b/buttonLite.js#uuid=&amp;style=3&amp;fs=4&amp;textcolor=#fff&amp;bgcolor=#9C3&amp;text=������'></script>
</body>
</html></html>
