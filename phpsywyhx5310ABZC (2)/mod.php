<?php
session_start();
include_once 'conn.php';
	$addnew=$_POST["addnew"];
	if($addnew=="1")
	{
	$username=$_POST['username'];
	$pwd=$_POST['xmm1'];
	$pwdy=$_POST['ymm'];
	$sql="select * from allusers where username='".$_SESSION['username']."'";
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
			{
					if(mysql_result($query,0,"pwd")==$pwdy)
					{
					$sql="update allusers set pwd='$pwd' where username='".$_SESSION['username']."'";
					$query=mysql_query($sql);
					echo "<script language='javascript'>alert('修改成功！');history.back();</script>";
					}
					else
					{
					echo "<script language='javascript'>alert('对不起,原密码不正确！');history.back();</script>";
					}
			}
			else
			{
					echo "<script language='javascript'>alert('对不起,原密码不正确！');history.back();</script>";
			}
	 }
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改密码</title>
<script src="ny/component/js/JQuery2.1.4.js"></script>
    <link rel="stylesheet" href="ny/component/style/components.css">
    <script src="ny/component/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="ny/css/bootstrap.css">
    <link rel="stylesheet" href="ny/css/plugins.css">
    <link rel="stylesheet" href="ny/css/main.css">
    <link rel="stylesheet" href="ny/css/themes.css">
</head>
<script>
function check()
{
	if(document.form1.ymm.value=="")
	{
		
		alert("请输入原密码");
		
		document.form1.ymm.focus();
		return false;
	}
	if(document.form1.xmm1.value=="")
	{
	
		alert("请输入新密码");
		document.form1.xmm1.focus();
		return false;
	}
	if(document.form1.xmm2.value=="")
	{
		alert("请输入确认密码");
		document.form1.xmm2.focus();
		return false;
	}
	if (document.form1.xmm1.value!=document.form1.xmm2.value)
	{
		alert("对不起，两次密码不一至，请重新输入");
		document.form1.xmm1.value="";
		document.form1.xmm2.value="";
		document.form1.xmm1.focus();
		return false;
	}
}

</script>
<body>
<ol class="breadcrumb">
            <li class="active"><a href="#">系统</a></li>
            <li>修改密码</li>
        </ol>
 <div class="tablebox">

<form id="form1" name="form1" method="post" action="">
<table class="table table-bordered table-hover"> 
  <table width="41%" height="266" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse:collapse">
    <tr>
      <td height="36" colspan="2"><div align="center">修改密码</div></td>
    </tr>
    <tr>
      <td>原密码：</td>
      <td><input name="ymm" type="text" id="ymm" class="form-control" />
      <input name="addnew" type="hidden" id="addnew" value="1"></td>
    </tr>
    <tr>
      <td>新密码：</td>
      <td><input name="xmm1" type="password" id="xmm1" class="form-control" /></td>
    </tr>
    <tr>
      <td>确认密码：</td>
      <td><input name="xmm2" type="password" id="xmm2" class="form-control" /></td>
    </tr>
    <tr>
      <td height="54">&nbsp;</td>
      <td>  <button type="submit" class="btn btn-success" onClick="return check();"><i class="fa fa-floppy-o"></i> 确认修改 </button>
    </td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
