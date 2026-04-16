<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$usernames=$_POST["usernames"];    $names=$_POST["names"];    $gender=$_POST["gender"];    $pwd=$_POST["pwd"];    $phone=$_POST["phone"];    $idcard=$_POST["idcard"];    $memo=$_POST["memo"];    
	
	$sql="update usersinfos set usernames='$usernames',names='$names',gender='$gender',pwd='$pwd',phone='$phone',idcard='$idcard',memo='$memo' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>用户信息</title>

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
            <li>修改用户信息</li>
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
$sql="select * from usersinfos where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{

?>
<form id="form1" name="form1" method="post" onSubmit="return check();" action="">
<div class="tabbody">
         <div class="bodyli active">   
			<div class='inputbox'><span class='title'>用户名</span><div class='inputright'><input type='text' name='usernames' id='usernames' class='form-control input-sm' value='<?php echo mysql_result($query,0,usernames);?>' readonly='readonly' /></div></div>      <div class='inputbox'><span class='title'>姓名</span><div class='inputright'><input type='text' name='names' id='names' class='form-control input-sm' value='<?php echo mysql_result($query,0,names);?>' /></div></div>      <div class='inputbox'><span class='title'>性别</span><div class='inputright'><select name='gender' id='gender' class='form-control input-sm'><option value="男">男</option><option value="女">女</option></select></div></div><script language="javascript">document.form1.gender.value='<?php echo mysql_result($query,0,gender);?>';</script>      <div class='inputbox'><span class='title'>密码</span><div class='inputright'><input type='text' name='pwd' id='pwd' class='form-control input-sm' value='<?php echo mysql_result($query,0,pwd);?>' /></div></div>      <div class='inputbox'><span class='title'>手机</span><div class='inputright'><input type='text' name='phone' id='phone' class='form-control input-sm' value='<?php echo mysql_result($query,0,phone);?>' /></div></div>      <div class='inputbox'><span class='title'>身份证</span><div class='inputright'><input type='text' name='idcard' id='idcard' class='form-control input-sm' value='<?php echo mysql_result($query,0,idcard);?>' /></div></div>      <div class='inputbox'><span class='title'>备注</span><div class='inputright'><input type='text' name='memo' id='memo' class='form-control input-sm' value='<?php echo mysql_result($query,0,memo);?>' /></div></div>      
	
		 <div class="tbfooter"><input name="addnew" type="hidden" id="addnew" value="1" />
				<button type="submit" class="btn btn-success" ><i class="fa fa-floppy-o"></i> 修改 </button>
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

