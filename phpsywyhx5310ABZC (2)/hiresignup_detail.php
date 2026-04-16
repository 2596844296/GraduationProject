<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>招聘报名详细</title>
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
            <li>招聘报名</li>
        </ol>


        <div class="tabli">
            <span class="active">招聘报名详细</span>
        </div>
					<?php
$sql="select * from hiresignup where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<div class="card-body">
<table class="table table-bordered table-hover">
      <tr>
	  <td width='11%'>报名人：</td><td width='39%'><?php echo mysql_result($query,0,signupby);?></td>      <td width='11%'>岗位编号：</td><td width='39%'><?php echo mysql_result($query,0,stationnumbers);?></td></tr><tr>      <td width='11%'>岗位名称：</td><td width='39%'><?php echo mysql_result($query,0,stationnamec);?></td>      <td width='11%'>学历要求：</td><td width='39%'><?php echo mysql_result($query,0,qualificationrequirement);?></td></tr><tr>      <td width='11%'>企业名称：</td><td width='39%'><?php echo mysql_result($query,0,enterprisenamec);?></td>      <td width='11%'>联系电话：</td><td width='39%'><?php echo mysql_result($query,0,lianxitel);?></td></tr><tr>      <td width='11%'>企业地址：</td><td width='39%'><?php echo mysql_result($query,0,enterpriseaddress);?></td>      <td>&nbsp;</td><td>&nbsp;</td></tr><tr>      <td colspan=4 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" class='btn btn-primary m-r-5'  /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='打印本页' class='btn btn-primary m-r-5' /></td></tr>
    
     
  </table>
</div>

<?php
	}
?>
</div>
</body>
</html>

