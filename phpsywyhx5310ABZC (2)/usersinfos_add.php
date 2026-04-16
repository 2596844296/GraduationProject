<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$usernames=$_POST["usernames"];    $names=$_POST["names"];    $gender=$_POST["gender"];    $pwd=$_POST["pwd"];    $phone=$_POST["phone"];    $idcard=$_POST["idcard"];    $memo=$_POST["memo"];    
	
	
	
	
	
	
	$sql="insert into usersinfos(usernames,names,gender,pwd,phone,idcard,memo) values('$usernames','$names','$gender','$pwd','$phone','$idcard','$memo') ";
	mysql_query($sql);
	
	
	echo "<script>javascript:alert('操作成功!');history.back();</script>";



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
            <li>添加用户信息</li>
        </ol>


        <div class="tabli">
            <span class="active">基本信息</span>
        </div>
<script language="javascript">
	function check()
{
	if(document.form1.usernames.value==""){alert("请输入用户名");document.form1.usernames.focus();return false;}    if(document.form1.names.value==""){alert("请输入姓名");document.form1.names.focus();return false;}    if(!(/^\d{15}$|^\d{18}$|^\d{17}[xX]$/.test(document.form1.idcard.value))){alert("身份证必需身份证格式");document.form1.idcard.focus();return false;}    
}
	function gow()
	{
		location.href='usersinfos_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
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



<form id="form1" name="form1" method="post" onSubmit="return check();" action="?id=<?php echo $_GET["id"]?>">
<div class="tabbody">
         <div class="bodyli active">   
			<div class='inputbox'><span class='title'>用户名</span><div class='inputright'><input type='text' name='usernames' id='usernames' class='form-control input-sm' value='' /></div></div>    <div class='inputbox'><span class='title'>姓名</span><div class='inputright'><input type='text' name='names' id='names' class='form-control input-sm' value='' /></div></div>    <div class='inputbox'><span class='title'>性别</span><div class='inputright'><select name='gender' id='gender' class='form-control input-sm'><option value="男">男</option><option value="女">女</option></select></div></div>    <div class='inputbox'><span class='title'>密码</span><div class='inputright'><input type='text' name='pwd' id='pwd' class='form-control input-sm' value='' /></div></div>    <div class='inputbox'><span class='title'>手机</span><div class='inputright'><input type='text' name='phone' id='phone' class='form-control input-sm' value='' /></div></div>    <div class='inputbox'><span class='title'>身份证</span><div class='inputright'><input type='text' name='idcard' id='idcard' class='form-control input-sm' value='' /></div></div>    <div class='inputbox'><span class='title'>备注</span><div class='inputright'><input type='text' name='memo' id='memo' class='form-control input-sm' value='' /></div></div>    
	
		 <div class="tbfooter">
		 		<input type="hidden" name="addnew" value="1" />
				<button type="submit" class="btn btn-success" onClick="return check();"><i class="fa fa-floppy-o"></i> 添加 </button>
		 </div>
	</div>
</div>
</form>
</div>

</body>
</html>

