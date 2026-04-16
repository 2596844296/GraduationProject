<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=企业信息.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>企业信息</title>
</head>

<body>

<p>已有企业信息列表：</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <th>企业编号</th>    <th>企业名称</th>    <th>图片</th>    <th>视频宣传</th>    <th>企业类型</th>    <th>所属行业</th>    <th>负责人</th>    <th>联系电话</th>    <th>注册资金</th>    <th>地址</th>    
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
  </tr>
  <?php 
    $sql="select * from enterpriseinfos order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  

for($i=0;$i<$rowscount;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,enterprisenumbers);?></td>    <td><?php echo mysql_result($query,$i,enterprisenamec);?></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,pic) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,pic) ?>' width='45' height='50' border='0'></a></td>    <td><a href="play.php?spwj=<?php echo mysql_result($query,$i,videosadvertising);?>" target='_blank'>播放</a></td>    <td><?php echo mysql_result($query,$i,enterprisetypes);?></td>    <td><?php echo mysql_result($query,$i,fields);?></td>    <td><?php echo mysql_result($query,$i,incharger);?></td>    <td><?php echo mysql_result($query,$i,lianxitel);?></td>    <td><?php echo mysql_result($query,$i,signinfund);?></td>    <td><?php echo mysql_result($query,$i,address);?></td>        
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>

