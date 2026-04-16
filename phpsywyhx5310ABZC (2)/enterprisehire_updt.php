<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$stationnumbers=$_POST["stationnumbers"];    $stationnamec=$_POST["stationnamec"];    $wagesdaiyu=$_POST["wagesdaiyu"];    $qualificationrequirement=$_POST["qualificationrequirement"];    $agerequirement=$_POST["agerequirement"];    $genderrequirement=$_POST["genderrequirement"];    $jobjingyan=$_POST["jobjingyan"];    $jobmode=$_POST["jobmode"];    $enterprisenamec=$_POST["enterprisenamec"];    $lianxitel=$_POST["lianxitel"];    $enterpriseaddress=$_POST["enterpriseaddress"];    
	
	$sql="update enterprisehire set stationnumbers='$stationnumbers',stationnamec='$stationnamec',wagesdaiyu='$wagesdaiyu',qualificationrequirement='$qualificationrequirement',agerequirement='$agerequirement',genderrequirement='$genderrequirement',jobjingyan='$jobjingyan',jobmode='$jobmode',enterprisenamec='$enterprisenamec',lianxitel='$lianxitel',enterpriseaddress='$enterpriseaddress' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');</script>";
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
            <li>修改企业招聘</li>
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
$sql="select * from enterprisehire where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{

?>
<form id="form1" name="form1" method="post" onSubmit="return check();" action="">
<div class="tabbody">
         <div class="bodyli active">   
			<div class='inputbox'><span class='title'>岗位编号</span><div class='inputright'><input type='text' name='stationnumbers' id='stationnumbers' class='form-control input-sm' value='<?php echo mysql_result($query,0,stationnumbers);?>' /></div></div>      <div class='inputbox'><span class='title'>岗位名称</span><div class='inputright'><input type='text' name='stationnamec' id='stationnamec' class='form-control input-sm' value='<?php echo mysql_result($query,0,stationnamec);?>' /></div></div>      <div class='inputbox'><span class='title'>薪资待遇</span><div class='inputright'><input type='text' name='wagesdaiyu' id='wagesdaiyu' class='form-control input-sm' value='<?php echo mysql_result($query,0,wagesdaiyu);?>' /></div></div>      <div class='inputbox'><span class='title'>学历要求</span><div class='inputright'><select name='qualificationrequirement' id='qualificationrequirement' class='form-control input-sm'><option value="本科以上">本科以上</option><option value="大专以上">大专以上</option><option value="中专以上">中专以上</option><option value="高中以上">高中以上</option><option value="其他学历">其他学历</option></select></div></div><script language="javascript">document.form1.qualificationrequirement.value='<?php echo mysql_result($query,0,qualificationrequirement);?>';</script>      <div class='inputbox'><span class='title'>年龄要求</span><div class='inputright'><input type='text' name='agerequirement' id='agerequirement' class='form-control input-sm' value='<?php echo mysql_result($query,0,agerequirement);?>' /></div></div>      <div class='inputbox'><span class='title'>性别要求</span><div class='inputright'><select name='genderrequirement' id='genderrequirement' class='form-control input-sm'><option value="男">男</option><option value="女">女</option><option value="不限">不限</option></select></div></div><script language="javascript">document.form1.genderrequirement.value='<?php echo mysql_result($query,0,genderrequirement);?>';</script>      <div class='inputbox'><span class='title'>工作经验</span><div class='inputright'><input type='text' name='jobjingyan' id='jobjingyan' class='form-control input-sm' value='<?php echo mysql_result($query,0,jobjingyan);?>' /></div></div>      <div class='inputbox'><span class='title'>工作方式</span><div class='inputright'><select name='jobmode' id='jobmode' class='form-control input-sm'><option value="兼职">兼职</option><option value="全职">全职</option></select></div></div><script language="javascript">document.form1.jobmode.value='<?php echo mysql_result($query,0,jobmode);?>';</script>      <div class='inputbox'><span class='title'>企业名称</span><div class='inputright'><input type='text' name='enterprisenamec' id='enterprisenamec' class='form-control input-sm' value='<?php echo mysql_result($query,0,enterprisenamec);?>' /></div></div>      <div class='inputbox'><span class='title'>联系电话</span><div class='inputright'><input type='text' name='lianxitel' id='lianxitel' class='form-control input-sm' value='<?php echo mysql_result($query,0,lianxitel);?>' /></div></div>      <div class='inputbox'><span class='title'>企业地址</span><div class='inputright'><input type='text' name='enterpriseaddress' id='enterpriseaddress' class='form-control input-sm' value='<?php echo mysql_result($query,0,enterpriseaddress);?>' /></div></div>      
	
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

