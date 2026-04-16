<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$wangzhanmingcheng=$_POST["wangzhanmingcheng"];    $wangzhi=$_POST["wangzhi"];    $logo=$_POST["logo"];    
	
	
	
	
	
	
	$sql="insert into youqinglianjie(wangzhanmingcheng,wangzhi,logo) values('$wangzhanmingcheng','$wangzhi','$logo') ";
	mysql_query($sql);
	
	
	echo "<script>javascript:alert('操作成功!');history.back();</script>";



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>友情连接</title>

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
            <li>创建单页</li>
        </ol>


        <div class="tabli">
            <span class="active">基本信息</span>
        </div>
<script language="javascript">
	function check()
{
	if(document.form1.wangzhanmingcheng.value==""){alert("请输入网站名称");document.form1.wangzhanmingcheng.focus();return false;}    if(document.form1.wangzhi.value==""){alert("请输入网址");document.form1.wangzhi.focus();return false;}    if(/^([hH][tT]{2}[pP]:\/\/|[hH][tT]{2}[pP][sS]:\/\/)(([A-Za-z0-9-~]+)\.)+([A-Za-z0-9-~\/])+$/.test(document.form1.wangzhi.value)){}else{alert("网址必需网址格式");document.form1.wangzhi.focus();return false;}    
}
	function gow()
	{
		location.href='youqinglianjie_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
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
			<div class='inputbox'><span class='title'>网站名称</span><div class='inputright'><input type='text' name='wangzhanmingcheng' id='wangzhanmingcheng' class='form-control input-sm' value='' /></div></div>    <div class='inputbox'><span class='title'>网址</span><div class='inputright'><input type='text' name='wangzhi' id='wangzhi' class='form-control input-sm' value='' ></div></div>    <div class='inputbox'><span class='title'>logo</span><div class='inputright'><input type='text' name='logo' id='logo' class='form-control input-sm' value='' /><label class='btn btn-success btn-sm' for='uploadimg' onClick="javaScript:OpenScript('upfile.php?Result=logo',460,180)" ><i class='fa fa-file-photo-o'></i></label></div></div>    
	
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

