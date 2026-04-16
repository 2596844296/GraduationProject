<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$enterprisenumbers=$_POST["enterprisenumbers"];    $enterprisenamec=$_POST["enterprisenamec"];    $pic=$_POST["pic"];    $videosadvertising=$_POST["videosadvertising"];    $enterprisetypes=$_POST["enterprisetypes"];    $fields=$_POST["fields"];    $incharger=$_POST["incharger"];    $lianxitel=$_POST["lianxitel"];    $signinfund=$_POST["signinfund"];    $address=$_POST["address"];    $enterprisememo=$_POST["enterprisememo"];    
	
	$sql="update enterpriseinfos set enterprisenumbers='$enterprisenumbers',enterprisenamec='$enterprisenamec',pic='$pic',videosadvertising='$videosadvertising',enterprisetypes='$enterprisetypes',fields='$fields',incharger='$incharger',lianxitel='$lianxitel',signinfund='$signinfund',address='$address',enterprisememo='$enterprisememo' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>企业信息</title>

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
            <li>修改企业信息</li>
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
$sql="select * from enterpriseinfos where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{

?>
<form id="form1" name="form1" method="post" onSubmit="return check();" action="">
<div class="tabbody">
         <div class="bodyli active">   
			<div class='inputbox'><span class='title'>企业编号</span><div class='inputright'><input type='text' name='enterprisenumbers' id='enterprisenumbers' class='form-control input-sm' value='<?php echo mysql_result($query,0,enterprisenumbers);?>' /></div></div>      <div class='inputbox'><span class='title'>企业名称</span><div class='inputright'><input type='text' name='enterprisenamec' id='enterprisenamec' class='form-control input-sm' value='<?php echo mysql_result($query,0,enterprisenamec);?>' ></div></div>      <div class='inputbox'><span class='title'>图片</span><div class='inputright'><input type='text' name='pic' id='pic' class='form-control input-sm' value='<?php echo mysql_result($query,0,pic);?>' /><label class='btn btn-success btn-sm' for='uploadimg' onClick="javaScript:OpenScript('upfile.php?Result=pic',460,180)" ><i class='fa fa-file-photo-o'></i></label></div></div>      <div class='inputbox'><span class='title'>视频宣传</span><div class='inputright'><input type='text' name='videosadvertising' id='videosadvertising' class='form-control input-sm' value='<?php echo mysql_result($query,0,videosadvertising);?>' /><label class='btn btn-success btn-sm' for='uploadimg' onClick="javaScript:OpenScript('upfile.php?Result=videosadvertising',460,180)" ><i class='fa fa-file-photo-o'></i></label></div></div>      <div class='inputbox'><span class='title'>企业类型</span><div class='inputright'><select name='enterprisetypes' id='enterprisetypes' class='form-control input-sm'></select></div></div><script language="javascript">document.form1.enterprisetypes.value='<?php echo mysql_result($query,0,enterprisetypes);?>';</script>      <div class='inputbox'><span class='title'>所属行业</span><div class='inputright'><select name='fields' id='fields' class='form-control input-sm'></select></div></div><script language="javascript">document.form1.fields.value='<?php echo mysql_result($query,0,fields);?>';</script>      <div class='inputbox'><span class='title'>负责人</span><div class='inputright'><input type='text' name='incharger' id='incharger' class='form-control input-sm' value='<?php echo mysql_result($query,0,incharger);?>' /></div></div>      <div class='inputbox'><span class='title'>联系电话</span><div class='inputright'><input type='text' name='lianxitel' id='lianxitel' class='form-control input-sm' value='<?php echo mysql_result($query,0,lianxitel);?>' /></div></div>      <div class='inputbox'><span class='title'>注册资金</span><div class='inputright'><input type='text' name='signinfund' id='signinfund' class='form-control input-sm' value='<?php echo mysql_result($query,0,signinfund);?>' /></div></div>      <div class='inputbox'><span class='title'>地址</span><div class='inputright'><input type='text' name='address' id='address' class='form-control input-sm' value='<?php echo mysql_result($query,0,address);?>' ></div></div>      <div class='inputbox'><span class='title'>企业简介</span><div class='inputright'><textarea id='enterprisememo' placeholder='' name='enterprisememo' class='form-control input-sm' ><?php echo mysql_result($query,0,enterprisememo);?></textarea></div></div>      
	
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

