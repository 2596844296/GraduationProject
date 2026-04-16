<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$lb=$_GET["lb"];
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$biaoti=$_POST["biaoti"];
    $leibie=$_POST["leibie"];
    $neirong=$_POST["neirong"];
    $shouyetupian=$_POST["shouyetupian"];
    $dianjilv=$_POST["dianjilv"];
    $tianjiaren=$_POST["tianjiaren"];
    
	
	
	
	
	
	
	$sql="insert into xinwentongzhi(biaoti,leibie,neirong,shouyetupian,dianjilv,tianjiaren) values('$biaoti','$leibie','$neirong','$shouyetupian','$dianjilv','$tianjiaren') ";
	mysql_query($sql);
	
	
	echo "<script>javascript:alert('操作成功!');history.back();</script>";



}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>新闻通知</title>
<link rel="stylesheet" href="kindeditor-4.1.10/themes/default/default.css" />
	<link rel="stylesheet" href="kindeditor-4.1.10/plugins/code/prettify.css" />
	<script charset="utf-8" src="kindeditor-4.1.10/kindeditor.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/lang/zh_CN.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="neirong"]', {
				cssPath : 'kindeditor-4.1.10/plugins/code/prettify.css',
				uploadJson : 'kindeditor-4.1.10/php/upload_json.php',
				fileManagerJson : 'kindeditor-4.1.10/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
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
	if(document.form1.biaoti.value==""){alert("请输入标题");document.form1.biaoti.focus();return false;}
    if(document.form1.leibie.value==""){alert("请输入类别");document.form1.leibie.focus();return false;}
    
}
	function gow()
	{
		location.href='xinwentongzhi_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
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
			<div class='inputbox'><span class='title'>标题</span><div class='inputright'><input type='text' name='biaoti' id='biaoti' class='form-control input-sm' value='' ></div></div>
    <div class='inputbox'><span class='title'>类别</span><div class='inputright'><input type='text' name='leibie' id='leibie' class='form-control input-sm' value='<?php echo $lb?>' /></div></div>
    <div class='inputbox'><span class='title'>内容</span><div class='inputright' style="width:auto"><textarea name="neirong" class="form-control" style="width:670px;height:200px;visibility:hidden;"></textarea></div></div>
    <div class='inputbox'><span class='title'>首页图片</span><div class='inputright'><input type='text' name='shouyetupian' id='shouyetupian' class='form-control input-sm' value='' /><label class='btn btn-success btn-sm' for='uploadimg' onClick="javaScript:OpenScript('upfile.php?Result=shouyetupian',460,180)" ><i class='fa fa-file-photo-o'></i></label></div></div>
    <div class='inputbox'><span class='title'>点击率</span><div class='inputright'><input type='text' name='dianjilv' id='dianjilv' class='form-control input-sm' value='100' /></div></div>
    <div class='inputbox'><span class='title'>添加人</span><div class='inputright'><input type='text' name='tianjiaren' id='tianjiaren' class='form-control input-sm' value='<?php echo $_SESSION['username'];?>' readonly='readonly' /></div></div>
    
	
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

