<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$huifu=$_POST["huifu"];
	
	$sql="update liuyanban set huifu='$huifu' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('操作成功!');location.href='liuyanban_list.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>留言板</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
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
            <li>回复留言板</li>
        </ol>
        <div class="tabli">
            <span class="active">回复内容</span>
        </div>

<?php
$sql="select * from liuyanban where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
//lixanxdoxngcxhaxifxen
?>
<form id="form1" name="form1" method="post" onSubmit="return check();" action="">
<div class="tabbody">
         <div class="bodyli active">   
			<div class='inputbox' style='display:none'><span class='title'>账号</span><div class='inputright'><input type='text' name='zhanghao' id='zhanghao' class='form-control input-sm' value='<?php echo mysql_result($query,0,zhanghao);?>' /></div></div>
      <div class='inputbox' style='display:none'><span class='title'>照片</span><div class='inputright'><input type='text' name='zhaopian' id='zhaopian' class='form-control input-sm' value='<?php echo mysql_result($query,0,zhaopian);?>' /></div></div>
      <div class='inputbox' style='display:none'><span class='title'>姓名</span><div class='inputright'><input type='text' name='xingming' id='xingming' class='form-control input-sm' value='<?php echo mysql_result($query,0,xingming);?>' /></div></div>
      <div class='inputbox' style='display:none'><span class='title'>留言</span><div class='inputright'><textarea id='liuyan' placeholder='' name='liuyan' class='form-control input-sm' ><?php echo mysql_result($query,0,liuyan);?></textarea></div></div>
      <div class='inputbox'><span class='title'>回复</span><div class='inputright'><textarea id='huifu' placeholder='' name='huifu' class='form-control input-sm' ><?php echo mysql_result($query,0,huifu);?></textarea></div></div>
		 <div class="tbfooter"><input name="addnew" type="hidden" id="addnew" value="1" />
				<button type="submit" class="btn btn-success" onClick="return check();"><i class="fa fa-floppy-o"></i> 确定 </button>
		 </div>
	</div>
</div>
</form>
<?php
	}
?>
</div>
</body>
</html>