<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$goodsnumbers=$_POST["goodsnumbers"];    $goodstypes=$_POST["goodstypes"];    $goodsnamec=$_POST["goodsnamec"];    $goodspic=$_POST["goodspic"];    $stocks=$_POST["stocks"];    $memo=$_POST["memo"];    
	
	$sql="update goodsinfos set goodsnumbers='$goodsnumbers',goodstypes='$goodstypes',goodsnamec='$goodsnamec',goodspic='$goodspic',stocks='$stocks',memo='$memo' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>产品信息</title>

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
            <li>修改产品信息</li>
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
$sql="select * from goodsinfos where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{

?>
<form id="form1" name="form1" method="post" onSubmit="return check();" action="">
<div class="tabbody">
         <div class="bodyli active">   
			<div class='inputbox'><span class='title'>产品编号</span><div class='inputright'><input type='text' name='goodsnumbers' id='goodsnumbers' class='form-control input-sm' value='<?php echo mysql_result($query,0,goodsnumbers);?>' /></div></div>      <div class='inputbox'><span class='title'>产品类别</span><div class='inputright'><select name='goodstypes' id='goodstypes' class='form-control input-sm'><?php getoption("goodstypes","types")?></select></div></div><script language="javascript">document.form1.goodstypes.value='<?php echo mysql_result($query,0,goodstypes);?>';</script>      <div class='inputbox'><span class='title'>产品名称</span><div class='inputright'><input type='text' name='goodsnamec' id='goodsnamec' class='form-control input-sm' value='<?php echo mysql_result($query,0,goodsnamec);?>' ></div></div>      <div class='inputbox'><span class='title'>产品图片</span><div class='inputright'><input type='text' name='goodspic' id='goodspic' class='form-control input-sm' value='<?php echo mysql_result($query,0,goodspic);?>' /><label class='btn btn-success btn-sm' for='uploadimg' onClick="javaScript:OpenScript('upfile.php?Result=goodspic',460,180)" ><i class='fa fa-file-photo-o'></i></label></div></div>      <div class='inputbox'><span class='title'>库存</span><div class='inputright'><input type='text' name='stocks' id='stocks' class='form-control input-sm' value='<?php echo mysql_result($query,0,stocks);?>' /></div></div>      <div class='inputbox'><span class='title'>备注</span><div class='inputright'><textarea id='memo' placeholder='' name='memo' class='form-control input-sm' ><?php echo mysql_result($query,0,memo);?></textarea></div></div>      
	
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

