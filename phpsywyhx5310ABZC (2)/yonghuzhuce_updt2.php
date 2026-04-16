<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$zhanghao=$_POST["zhanghao"];    $mima=$_POST["mima"];    $xingming=$_POST["xingming"];    $xingbie=$_POST["xingbie"];    $diqu=$_POST["diqu"];    $Email=$_POST["Email"];    $zhaopian=$_POST["zhaopian"];    
	
	$sql="update yonghuzhuce set zhanghao='$zhanghao',mima='$mima',xingming='$xingming',xingbie='$xingbie',diqu='$diqu',Email='$Email',zhaopian='$zhaopian' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>用户注册</title>

<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<script src="ny/component/js/JQuery2.1.4.js"></script>
<link rel="stylesheet" href="ny/component/style/components.css">
<script src="ny/component/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="ny/css/bootstrap.css">
<link rel="stylesheet" href="ny/css/plugins.css">
<link rel="stylesheet" href="ny/css/main.css">
<link rel="stylesheet" href="ny/css/themes.css">
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
    <div id="body">
        <ol class="breadcrumb">
            <li class="active"><a href="#">系统</a></li>
            <li>修改单页</li>
        </ol>


        <div class="tabli">
            <span class="active">基本信息</span>
        </div>
<script language="javascript">

	function hsgxia2shxurxu(nstr,nwbk)
{
	if (eval("form1."+nwbk).value.indexOf(nstr)>=0)
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value.replace(nstr+"；", "");
	}
	else
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value+nstr+"；";
	}
}
</script>


<?php
$sql="select * from yonghuzhuce where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{

?>
<form id="form1" name="form1" method="post" onSubmit="return check();" action="">
<div class="tabbody">
         <div class="bodyli active">   
			<div class='inputbox'><span class='title'>账号</span><div class='inputright'><input type='text' name='zhanghao' id='zhanghao' class='form-control input-sm' value='<?php echo mysql_result($query,0,zhanghao);?>' readonly='readonly' /></div></div>      <div class='inputbox'><span class='title'>密码</span><div class='inputright'><input type='text' name='mima' id='mima' class='form-control input-sm' value='<?php echo mysql_result($query,0,mima);?>' /></div></div>      <div class='inputbox'><span class='title'>姓名</span><div class='inputright'><input type='text' name='xingming' id='xingming' class='form-control input-sm' value='<?php echo mysql_result($query,0,xingming);?>' /></div></div>      <div class='inputbox'><span class='title'>性别</span><div class='inputright'><select name='xingbie' id='xingbie' class='form-control input-sm'><option value="男">男</option><option value="女">女</option></select></div></div><script language="javascript">document.form1.xingbie.value='<?php echo mysql_result($query,0,xingbie);?>';</script>      <div class='inputbox'><span class='title'>地区</span><div class='inputright'><input type='text' name='diqu' id='diqu' class='form-control input-sm' value='<?php echo mysql_result($query,0,diqu);?>' /></div></div>      <div class='inputbox'><span class='title'>Email</span><div class='inputright'><input type='text' name='Email' id='Email' class='form-control input-sm' value='<?php echo mysql_result($query,0,Email);?>' /></div></div>      <div class='inputbox'><span class='title'>照片</span><div class='inputright'><input type='text' name='zhaopian' id='zhaopian' class='form-control input-sm' value='<?php echo mysql_result($query,0,zhaopian);?>' /><label class='btn btn-success btn-sm' for='uploadimg' onClick="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)" ><i class='fa fa-file-photo-o'></i></label></div></div>      
	
		 <div class="tbfooter"><input name="addnew" type="hidden" id="addnew" value="1" />
				<button type="submit" class="btn btn-success" onClick="return check();"><i class="fa fa-floppy-o"></i> 修改 </button>
		 </div>
	</div>
</div>
</form>
<?php
	}
?>
</div>
<p>&nbsp;</p>

</body>
</html>

