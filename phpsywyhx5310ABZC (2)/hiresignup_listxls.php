<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=招聘报名.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>招聘报名</title>
</head>

<body>

<p>已有招聘报名列表：</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <th>报名人</th>    <th>岗位编号</th>    <th>岗位名称</th>    <th>学历要求</th>    <th>企业名称</th>    <th>联系电话</th>    <th>企业地址</th>    
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
  </tr>
  <?php 
    $sql="select * from hiresignup order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  

for($i=0;$i<$rowscount;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,signupby);?></td>    <td><?php echo mysql_result($query,$i,stationnumbers);?></td>    <td><?php echo mysql_result($query,$i,stationnamec);?></td>    <td><?php echo mysql_result($query,$i,qualificationrequirement);?></td>    <td><?php echo mysql_result($query,$i,enterprisenamec);?></td>    <td><?php echo mysql_result($query,$i,lianxitel);?></td>    <td><?php echo mysql_result($query,$i,enterpriseaddress);?></td>    
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>

