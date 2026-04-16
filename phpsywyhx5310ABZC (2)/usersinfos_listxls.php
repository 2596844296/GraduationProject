<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=用户信息.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户信息</title>
</head>

<body>

<p>已有用户信息列表：</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <th>用户名</th>    <th>姓名</th>    <th align='center'>性别</th>    <th>密码</th>    <th>手机</th>    <th>身份证</th>    <th>备注</th>    
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
  </tr>
  <?php 
    $sql="select * from usersinfos order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  

for($i=0;$i<$rowscount;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,usernames);?></td>    <td><?php echo mysql_result($query,$i,names);?></td>    <td align='center'><?php if(mysql_result($query,$i,gender)=="男"){?><span class='label label-danger'><?php echo mysql_result($query,$i,gender);?></span><?php } else {?><span class='label label-success'><?php echo mysql_result($query,$i,gender);?></span><?php } ?></td>    <td><?php echo mysql_result($query,$i,pwd);?></td>    <td><?php echo mysql_result($query,$i,phone);?></td>    <td><?php echo mysql_result($query,$i,idcard);?></td>    <td><?php echo mysql_result($query,$i,memo);?></td>    
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>

