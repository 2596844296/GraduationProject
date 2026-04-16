<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=产品信息.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>产品信息</title>
</head>

<body>

<p>已有产品信息列表：</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <th>产品编号</th>    <th>产品类别</th>    <th>产品名称</th>    <th>产品图片</th>    <th>库存</th>    
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
  </tr>
  <?php 
    $sql="select * from goodsinfos order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  

for($i=0;$i<$rowscount;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,goodsnumbers);?></td>    <td><?php echo mysql_result($query,$i,goodstypes);?></td>    <td><?php echo mysql_result($query,$i,goodsnamec);?></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,goodspic) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,goodspic) ?>' width='45' height='50' border='0'></a></td>    <td><?php echo mysql_result($query,$i,stocks);?></td>        
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>

