<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=企业招聘.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>企业招聘</title>
</head>

<body>

<p>已有企业招聘列表：</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <th>岗位编号</th>    <th>岗位名称</th>    <th>薪资待遇</th>    <th>学历要求</th>    <th>年龄要求</th>    <th>性别要求</th>    <th>工作经验</th>    <th>工作方式</th>    <th>企业名称</th>    <th>联系电话</th>    <th>企业地址</th>    <th align='center'>是否审核</th>    
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
  </tr>
  <?php 
    $sql="select * from enterprisehire order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  

for($i=0;$i<$rowscount;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,stationnumbers);?></td>    <td><?php echo mysql_result($query,$i,stationnamec);?></td>    <td><?php echo mysql_result($query,$i,wagesdaiyu);?></td>    <td><?php echo mysql_result($query,$i,qualificationrequirement);?></td>    <td><?php echo mysql_result($query,$i,agerequirement);?></td>    <td><?php echo mysql_result($query,$i,genderrequirement);?></td>    <td><?php echo mysql_result($query,$i,jobjingyan);?></td>    <td><?php echo mysql_result($query,$i,jobmode);?></td>    <td><?php echo mysql_result($query,$i,enterprisenamec);?></td>    <td><?php echo mysql_result($query,$i,lianxitel);?></td>    <td><?php echo mysql_result($query,$i,enterpriseaddress);?></td>    <td width='100px'><a class='<?php if(mysql_result($query,$i,"issh")=="是"){echo "label label-danger";}else{echo "label label-success";}?>' href="sh.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"issh")?>&tablename=enterprisehire" onclick="return confirm('您确定要执行此操作？')"><?php echo mysql_result($query,$i,"issh")?></a></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>

