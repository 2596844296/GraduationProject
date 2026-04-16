<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>企业信息详细</title>
<script src="ny/component/js/JQuery2.1.4.js"></script>
<link rel="stylesheet" href="ny/component/style/components.css">
<script src="ny/component/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="ny/css/bootstrap.css">
<link rel="stylesheet" href="ny/css/plugins.css">
<link rel="stylesheet" href="ny/css/main.css">
<link rel="stylesheet" href="ny/css/themes.css">
</head>
<body>
<div id="body">
 <ol class="breadcrumb">
            <li class="active"><a href="#">系统</a></li>
            <li>企业信息</li>
        </ol>


        <div class="tabli">
            <span class="active">企业信息详细</span>
        </div>
					<?php
$sql="select * from enterpriseinfos where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<div class="card-body">
<table class="table table-bordered table-hover">
      <tr>
	  <td width='11%' height=44>企业编号：</td><td width='39%'><?php echo mysql_result($query,0,enterprisenumbers);?></td><td  rowspan=9 align=center><a href=<?php echo mysql_result($query,0,pic);?> target=_blank><img src=<?php echo mysql_result($query,0,pic);?> width=228 height=215 border=0></a></td></tr><tr>      <td width='11%' height=44>企业名称：</td><td width='39%'><?php echo mysql_result($query,0,enterprisenamec);?></td></tr><tr>            <td width='11%' height=44>视频宣传：</td><td width='39%'><a href="play.php?spwj=<?php echo mysql_result($query,0,videosadvertising);?>" target='_blank'>点此播放</a></td></tr><tr>      <td width='11%' height=44>企业类型：</td><td width='39%'><?php echo mysql_result($query,0,enterprisetypes);?></td></tr><tr>      <td width='11%' height=44>所属行业：</td><td width='39%'><?php echo mysql_result($query,0,fields);?></td></tr><tr>      <td width='11%' height=44>负责人：</td><td width='39%'><?php echo mysql_result($query,0,incharger);?></td></tr><tr>      <td width='11%' height=44>联系电话：</td><td width='39%'><?php echo mysql_result($query,0,lianxitel);?></td></tr><tr>      <td width='11%' height=44>注册资金：</td><td width='39%'><?php echo mysql_result($query,0,signinfund);?></td></tr><tr>      <td width='11%' height=44>地址：</td><td width='39%'><?php echo mysql_result($query,0,address);?></td></tr><tr>            <td width='11%' height=100  >企业简介：</td><td width='39%' colspan=2 height=100 ><?php echo mysql_result($query,0,enterprisememo);?></td></tr><tr>      <td colspan=3 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" class='btn btn-primary m-r-5'   /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='打印本页' class='btn btn-primary m-r-5'  /></td></tr>
    
     
  </table>
</div>

<?php
	}
?>
</div>
</body>
</html>

