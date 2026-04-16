<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户信息详细</title>
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
            <li>用户信息</li>
        </ol>


        <div class="tabli">
            <span class="active">用户信息详细</span>
        </div>
					<?php
$sql="select * from usersinfos where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<div class="card-body">
<table class="table table-bordered table-hover">
      <tr>
	  <td width='11%'>用户名：</td><td width='39%'><?php echo mysql_result($query,0,usernames);?></td>      <td width='11%'>姓名：</td><td width='39%'><?php echo mysql_result($query,0,names);?></td></tr><tr>      <td width='11%'>性别：</td><td width='39%'><?php echo mysql_result($query,0,gender);?></td>      <td width='11%'>密码：</td><td width='39%'><?php echo mysql_result($query,0,pwd);?></td></tr><tr>      <td width='11%'>手机：</td><td width='39%'><?php echo mysql_result($query,0,phone);?></td>      <td width='11%'>身份证：</td><td width='39%'><?php echo mysql_result($query,0,idcard);?></td></tr><tr>      <td width='11%'>备注：</td><td width='39%'><?php echo mysql_result($query,0,memo);?></td>      <td>&nbsp;</td><td>&nbsp;</td></tr><tr>      <td colspan=4 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" class='btn btn-primary m-r-5'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='打印本页' class='btn btn-primary m-r-5' /></td></tr>
    
     
  </table>
</div>

<?php
	}
?>
</div>
</body>
</html>

