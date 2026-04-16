<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$signupby=$_POST["signupby"];    $stationnumbers=$_POST["stationnumbers"];    $stationnamec=$_POST["stationnamec"];    $qualificationrequirement=$_POST["qualificationrequirement"];    $enterprisenamec=$_POST["enterprisenamec"];    $lianxitel=$_POST["lianxitel"];    $enterpriseaddress=$_POST["enterpriseaddress"];    
	
	$sql="update hiresignup set signupby='$signupby',stationnumbers='$stationnumbers',stationnamec='$stationnamec',qualificationrequirement='$qualificationrequirement',enterprisenamec='$enterprisenamec',lianxitel='$lianxitel',enterpriseaddress='$enterpriseaddress' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');</script>";
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
            <li>修改招聘报名</li>
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
$sql="select * from hiresignup where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{

?>
<form id="form1" name="form1" method="post" onSubmit="return check();" action="">
<div class="tabbody">
         <div class="bodyli active">   
			<div class='inputbox'><span class='title'>报名人</span><div class='inputright'><input type='text' name='signupby' id='signupby' class='form-control input-sm' value='<?php echo mysql_result($query,0,signupby);?>' /></div></div>      <div class='inputbox'><span class='title'>岗位编号</span><div class='inputright'><input type='text' name='stationnumbers' id='stationnumbers' class='form-control input-sm' value='<?php echo mysql_result($query,0,stationnumbers);?>' /></div></div>      <div class='inputbox'><span class='title'>岗位名称</span><div class='inputright'><input type='text' name='stationnamec' id='stationnamec' class='form-control input-sm' value='<?php echo mysql_result($query,0,stationnamec);?>' /></div></div>      <div class='inputbox'><span class='title'>学历要求</span><div class='inputright'><input type='text' name='qualificationrequirement' id='qualificationrequirement' class='form-control input-sm' value='<?php echo mysql_result($query,0,qualificationrequirement);?>' /></div></div>      <div class='inputbox'><span class='title'>企业名称</span><div class='inputright'><input type='text' name='enterprisenamec' id='enterprisenamec' class='form-control input-sm' value='<?php echo mysql_result($query,0,enterprisenamec);?>' /></div></div>      <div class='inputbox'><span class='title'>联系电话</span><div class='inputright'><input type='text' name='lianxitel' id='lianxitel' class='form-control input-sm' value='<?php echo mysql_result($query,0,lianxitel);?>' /></div></div>      <div class='inputbox'><span class='title'>企业地址</span><div class='inputright'><input type='text' name='enterpriseaddress' id='enterpriseaddress' class='form-control input-sm' value='<?php echo mysql_result($query,0,enterpriseaddress);?>' /></div></div>      
	
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

