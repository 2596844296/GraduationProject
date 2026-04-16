<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$stationnumbers=$_POST["stationnumbers"];    $stationnamec=$_POST["stationnamec"];    $wagesdaiyu=$_POST["wagesdaiyu"];    $qualificationrequirement=$_POST["qualificationrequirement"];    $agerequirement=$_POST["agerequirement"];    $genderrequirement=$_POST["genderrequirement"];    $jobjingyan=$_POST["jobjingyan"];    $jobmode=$_POST["jobmode"];    $enterprisenamec=$_POST["enterprisenamec"];    $lianxitel=$_POST["lianxitel"];    $enterpriseaddress=$_POST["enterpriseaddress"];    
	
	
	
	
	ischongfu("select id from enterprisehire where  stationnumbers='$stationnumbers'");
	
	$sql="insert into enterprisehire(stationnumbers,stationnamec,wagesdaiyu,qualificationrequirement,agerequirement,genderrequirement,jobjingyan,jobmode,enterprisenamec,lianxitel,enterpriseaddress) values('$stationnumbers','$stationnamec','$wagesdaiyu','$qualificationrequirement','$agerequirement','$genderrequirement','$jobjingyan','$jobmode','$enterprisenamec','$lianxitel','$enterpriseaddress') ";
	mysql_query($sql);
	
	
	echo "<script>javascript:alert('操作成功!');history.back();</script>";



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>企业招聘</title>

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
            <li>添加企业招聘</li>
        </ol>


        <div class="tabli">
            <span class="active">基本信息</span>
        </div>
<script language="javascript">
	function check()
{
	if(document.form1.stationnumbers.value==""){alert("请输入岗位编号");document.form1.stationnumbers.focus();return false;}    if(document.form1.stationnamec.value==""){alert("请输入岗位名称");document.form1.stationnamec.focus();return false;}    if(document.form1.qualificationrequirement.value==""){alert("请输入学历要求");document.form1.qualificationrequirement.focus();return false;}    if(document.form1.jobmode.value==""){alert("请输入工作方式");document.form1.jobmode.focus();return false;}    if(document.form1.lianxitel.value==""){alert("请输入联系电话");document.form1.lianxitel.focus();return false;}    if(document.form1.enterpriseaddress.value==""){alert("请输入企业地址");document.form1.enterpriseaddress.focus();return false;}    
}
	function gow()
	{
		location.href='enterprisehire_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
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
			<div class='inputbox'><span class='title'>岗位编号</span><div class='inputright'><input type='text' name='stationnumbers' id='stationnumbers' class='form-control input-sm' value='' /></div></div>    <div class='inputbox'><span class='title'>岗位名称</span><div class='inputright'><input type='text' name='stationnamec' id='stationnamec' class='form-control input-sm' value='' /></div></div>    <div class='inputbox'><span class='title'>薪资待遇</span><div class='inputright'><input type='text' name='wagesdaiyu' id='wagesdaiyu' class='form-control input-sm' value='' /></div></div>    <div class='inputbox'><span class='title'>学历要求</span><div class='inputright'><select name='qualificationrequirement' id='qualificationrequirement' class='form-control input-sm'><option value="本科以上">本科以上</option><option value="大专以上">大专以上</option><option value="中专以上">中专以上</option><option value="高中以上">高中以上</option><option value="其他学历">其他学历</option></select></div></div>    <div class='inputbox'><span class='title'>年龄要求</span><div class='inputright'><input type='text' name='agerequirement' id='agerequirement' class='form-control input-sm' value='' /></div></div>    <div class='inputbox'><span class='title'>性别要求</span><div class='inputright'><select name='genderrequirement' id='genderrequirement' class='form-control input-sm'><option value="男">男</option><option value="女">女</option><option value="不限">不限</option></select></div></div>    <div class='inputbox'><span class='title'>工作经验</span><div class='inputright'><input type='text' name='jobjingyan' id='jobjingyan' class='form-control input-sm' value='' /></div></div>    <div class='inputbox'><span class='title'>工作方式</span><div class='inputright'><select name='jobmode' id='jobmode' class='form-control input-sm'><option value="兼职">兼职</option><option value="全职">全职</option></select></div></div>    <div class='inputbox'><span class='title'>企业名称</span><div class='inputright'><input type='text' name='enterprisenamec' id='enterprisenamec' class='form-control input-sm' value='' /></div></div>    <div class='inputbox'><span class='title'>联系电话</span><div class='inputright'><input type='text' name='lianxitel' id='lianxitel' class='form-control input-sm' value='' /></div></div>    <div class='inputbox'><span class='title'>企业地址</span><div class='inputright'><input type='text' name='enterpriseaddress' id='enterpriseaddress' class='form-control input-sm' value='' /></div></div>    
	
		 <div class="tbfooter">
		 		<input type="hidden" name="addnew" value="1" />
				<button type="submit" class="btn btn-success" onClick="return check();"><i class="fa fa-floppy-o"></i> 添加 </button>
		 </div>
	</div>
</div>
</form>
</div>
<?php
	function ischongfu($sql)
	{
		$query=mysql_query($sql);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('对不起，您输入的岗位编号已经存在，请重试!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>

