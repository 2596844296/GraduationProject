<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$signupby=$_POST["signupby"];    $stationnumbers=$_POST["stationnumbers"];    $stationnamec=$_POST["stationnamec"];    $qualificationrequirement=$_POST["qualificationrequirement"];    $enterprisenamec=$_POST["enterprisenamec"];    $lianxitel=$_POST["lianxitel"];    $enterpriseaddress=$_POST["enterpriseaddress"];    
	
	
	
	
	
	
	$sql="insert into hiresignup(signupby,stationnumbers,stationnamec,qualificationrequirement,enterprisenamec,lianxitel,enterpriseaddress) values('$signupby','$stationnumbers','$stationnamec','$qualificationrequirement','$enterprisenamec','$lianxitel','$enterpriseaddress') ";
	mysql_query($sql);
	
	
	echo "<script>javascript:alert('操作成功!');history.back();</script>";



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>招聘报名</title>

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
            <li>添加招聘报名</li>
        </ol>


        <div class="tabli">
            <span class="active">基本信息</span>
        </div>
<script language="javascript">
	function check()
{
	if(document.form1.signupby.value==""){alert("请输入报名人");document.form1.signupby.focus();return false;}    
}
	function gow()
	{
		location.href='hiresignup_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
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

 <?php
 $sql="select * from enterprisehire where id=".$_GET["id"];
 $query=mysql_query($sql);
 $rowscount=mysql_num_rows($query);
 if($rowscount>0)
 {
 	$stationnumbers=mysql_result($query,0,stationnumbers); 	$stationnamec=mysql_result($query,0,stationnamec); 	$qualificationrequirement=mysql_result($query,0,qualificationrequirement); 	$enterprisenamec=mysql_result($query,0,enterprisenamec); 	$lianxitel=mysql_result($query,0,lianxitel); 	$enterpriseaddress=mysql_result($query,0,enterpriseaddress); 	
 }
?>

<form id="form1" name="form1" method="post" onSubmit="return check();" action="?id=<?php echo $_GET["id"]?>">
<div class="tabbody">
         <div class="bodyli active">   
			<div class='inputbox'><span class='title'>报名人</span><div class='inputright'><input type='text' name='signupby' id='signupby' class='form-control input-sm' value='<?php echo $_SESSION['username'];?>' readonly='readonly' /></div></div>    <div class='inputbox'><span class='title'>岗位编号</span><div class='inputright'><input type='text' name='stationnumbers' id='stationnumbers' class='form-control input-sm' value='' /></div></div><script language="javascript">document.form1.stationnumbers.value='<?php echo $stationnumbers?>';document.form1.stationnumbers.setAttribute("readOnly",'true');</script>    <div class='inputbox'><span class='title'>岗位名称</span><div class='inputright'><input type='text' name='stationnamec' id='stationnamec' class='form-control input-sm' value='' /></div></div><script language="javascript">document.form1.stationnamec.value='<?php echo $stationnamec?>';document.form1.stationnamec.setAttribute("readOnly",'true');</script>    <div class='inputbox'><span class='title'>学历要求</span><div class='inputright'><input type='text' name='qualificationrequirement' id='qualificationrequirement' class='form-control input-sm' value='' /></div></div><script language="javascript">document.form1.qualificationrequirement.value='<?php echo $qualificationrequirement?>';document.form1.qualificationrequirement.setAttribute("readOnly",'true');</script>    <div class='inputbox'><span class='title'>企业名称</span><div class='inputright'><input type='text' name='enterprisenamec' id='enterprisenamec' class='form-control input-sm' value='' /></div></div><script language="javascript">document.form1.enterprisenamec.value='<?php echo $enterprisenamec?>';document.form1.enterprisenamec.setAttribute("readOnly",'true');</script>    <div class='inputbox'><span class='title'>联系电话</span><div class='inputright'><input type='text' name='lianxitel' id='lianxitel' class='form-control input-sm' value='' /></div></div><script language="javascript">document.form1.lianxitel.value='<?php echo $lianxitel?>';document.form1.lianxitel.setAttribute("readOnly",'true');</script>    <div class='inputbox'><span class='title'>企业地址</span><div class='inputright'><input type='text' name='enterpriseaddress' id='enterpriseaddress' class='form-control input-sm' value='' /></div></div><script language="javascript">document.form1.enterpriseaddress.value='<?php echo $enterpriseaddress?>';document.form1.enterpriseaddress.setAttribute("readOnly",'true');</script>    
	
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

