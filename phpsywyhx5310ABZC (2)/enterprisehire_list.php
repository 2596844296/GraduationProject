<?php 
session_start();
include_once 'conn.php';

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
  function checkall()
  {
  	if(document.form2.plxz.checked==true)
	{
		var code_Values = document.all['bh[]']; 
		if(code_Values.length){ 
		for(var i=0;i<code_Values.length;i++) 
		{ 
		code_Values[i].checked = true; 
		} 
		}else{ 
		code_Values.checked = true; 
		} 
	}
	else
	{
		var code_Values = document.all['bh[]']; 
		if(code_Values.length){ 
		for(var i=0;i<code_Values.length;i++) 
		{ 
		code_Values[i].checked = false;  
		} 
		}else{ 
		code_Values.checked = false; 
		} 
	}
  }
  </script>
<body>
    <div id="body">
        <ol class="breadcrumb">
            <li class="active"><a href="#">系统</a></li>
            <li>企业招聘列表</li>
        </ol>
        <div class="barboxs">
            <button class="btn btn-success pull-left" data-toggle="tooltip" title="" data-placement="right" onClick="location.href='enterprisehire_listxls.php';" style="cursor:pointer"
                data-original-title="导出excel"><i class="fa fa-file-word-o"></i></button>
            <button class="btn btn-warning pull-left ml10" data-toggle="tooltip" title="" data-placement="right" onClick="window.print()" style="cursor:pointer"
                data-original-title="打印本页"><i class="fa fa-level-down"></i></button>
            <button class="btn btn-danger pull-left ml10" data-toggle="tooltip" title="" data-placement="right"  onClick="delAll()" style="cursor:pointer"
                data-original-title="批量删除"><i class="fa fa-trash-o"></i></button>
           <div class="leftbox" >
			<form action="" method="post">
			 <div class="leftbox" >
              	  <div class='liselect'><input name="stationnumbers" type="text" id="stationnumbers" class="form-control example-typeahead" placeholder='岗位编号' style='width:120px;' /></div> <div class='liselect'><input name="stationnamec" type="text" id="stationnamec" class="form-control example-typeahead" placeholder='岗位名称' style='width:120px;' /></div><div class='liselect'><select id='qualificationrequirement' name='qualificationrequirement' class='form-control'><option value="">所有</option><option value="本科以上">本科以上</option><option value="大专以上">大专以上</option><option value="中专以上">中专以上</option><option value="高中以上">高中以上</option><option value="其他学历">其他学历</option></select></div><div class='liselect'><select id='genderrequirement' name='genderrequirement' class='form-control'><option value="">所有</option><option value="男">男</option><option value="女">女</option><option value="不限">不限</option></select></div><div class='liselect'><select id='jobmode' name='jobmode' class='form-control'><option value="">所有</option><option value="兼职">兼职</option><option value="全职">全职</option></select></div>
                <div class="liselect ">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-success"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
           </div></form>  </div>
        </div>
		<div class='push'><button class='btn btn-success pull-left' onClick="location.href='enterprisehire_add.php';"><i class='fa fa-plus'></i> 发布新数据 </button></div>
 <div class="tablebox">
 <form name="form2" method="post" action="delall.php"> 	
<table class="table table-bordered table-hover">
  <tr>
     <th ><input name="plxz" type="checkbox" id="plxz" onClick="checkall();" value="1" />
	<input name="tablename" type="hidden" id="tablename" value="enterprisehire" /><input name="comew" type="hidden" id="comew" value="enterprisehire_list" />
	</th>
	<th >序号</th>
    <th>岗位编号</th>
    <th>岗位名称</th>
    <th>薪资待遇</th>
    <th>学历要求</th>
    <th>年龄要求</th>
    <th>性别要求</th>
    <th>工作经验</th>
    <th>工作方式</th>
    <th>企业名称</th>
    <th>联系电话</th>
    <th>企业地址</th>
    <th align='center'>是否审核</th>
    
	
    <th align="center">添加时间</th>
    <th class="cell-small text-center"><i class="fa fa-bolt"></i> 操作</th>
  </tr>
  <?php 
    $sql="select * from enterprisehire where 1=1";
  
if ($_POST["stationnumbers"]!=""){$nreqstationnumbers=$_POST["stationnumbers"];$sql=$sql." and stationnumbers like '%$nreqstationnumbers%'";}
if ($_POST["stationnamec"]!=""){$nreqstationnamec=$_POST["stationnamec"];$sql=$sql." and stationnamec like '%$nreqstationnamec%'";}
if ($_POST["qualificationrequirement"]!=""){$nreqqualificationrequirement=$_POST["qualificationrequirement"];$sql=$sql." and qualificationrequirement like '%$nreqqualificationrequirement%'";}
if ($_POST["genderrequirement"]!=""){$nreqgenderrequirement=$_POST["genderrequirement"];$sql=$sql." and genderrequirement like '%$nreqgenderrequirement%'";}
if ($_POST["jobmode"]!=""){$nreqjobmode=$_POST["jobmode"];$sql=$sql." and jobmode like '%$nreqjobmode%'";}
  if($_POST["paixu"]!="")
  {
  	$sql=$sql." order by ".$_POST["paixu"]." ".$_POST["px"]."";
  }
  else
  {
  	$sql=$sql." order by id desc";
  }
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{



  ?>
  <tr>
    <td><input name="bh[]" type="checkbox" id="bh[]" value="<?php echo mysql_result($query,$i,id);?>" /></td>
    <td ><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,stationnumbers);?></td>
    <td><?php echo mysql_result($query,$i,stationnamec);?></td>
    <td><?php echo mysql_result($query,$i,wagesdaiyu);?></td>
    <td><?php echo mysql_result($query,$i,qualificationrequirement);?></td>
    <td><?php echo mysql_result($query,$i,agerequirement);?></td>
    <td><?php echo mysql_result($query,$i,genderrequirement);?></td>
    <td><?php echo mysql_result($query,$i,jobjingyan);?></td>
    <td><?php echo mysql_result($query,$i,jobmode);?></td>
    <td><?php echo mysql_result($query,$i,enterprisenamec);?></td>
    <td><?php echo mysql_result($query,$i,lianxitel);?></td>
    <td><?php echo mysql_result($query,$i,enterpriseaddress);?></td>
    <td width='100px'>
<?php
// 获取审核状态
$issh_status = mysql_result($query,$i,"issh");
if($issh_status == "否"){
    // 未审核：显示可点击的红色按钮
?>
    <a class="label label-danger" 
       href="sh.php?id=<?php echo mysql_result($query,$i,"id"); ?>&yuan=否&tablename=enterprisehire" 
       onclick="return confirm('您确定要执行审核操作？')">
       未审核
    </a>
<?php
}else{
    // 已审核：仅显示纯文本绿色标签，无链接、无按钮
?>
    <span class="label label-success">已审核</span>
<?php
}
?>
</td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td class="text-center">
	<div class="btn-group">
<a href="enterprisehiredetail.php?id=<?php echo mysql_result($query,$i,id);?>" target="_blank" class='btn btn-xs btn-info' data-toggle='tooltip' data-placement='top' title='前台预览'><i class='fa fa-info-circle'></i></a>
    <a href="enterprisehire_updt.php?id=<?php echo mysql_result($query,$i,"id");?>" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="修改"><i class="fa fa-pencil"></i></a>
    <a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=enterprisehire" onClick="return confirm('真的要删除？')" class="btn btn-xs btn-danger" data-toggle="tooltip"  data-placement="top" title="删除"><i class="fa fa-trash-o"></i></a>
                            </div>
 </td>
  </tr>
  	<?php
	}
}
?>
</table>
</form>
 </div>
 <div class="fy">
            <ul class="pagination">
	 <?php
	 if($pagecurrent==1)
	 {
	 	echo "<li  class='disabled'><span>&laquo;</span></li>";
	 }
	 else
	 {
	 	$t=$pagecurrent-1;
	 	echo "<li><a href='enterprisehire_list.php?pagecurrent=".$t."'>&laquo;</a></li>";
	 }
	 
	 for($fyi=1;$fyi<=$pagecount;$fyi++)
	 {
	 ?>
	  <li
	 <?php
	 if($pagecurrent==$fyi)
	 {
	 	echo " class='active'";
	 }
	 ?>
	 ><a href="enterprisehire_list.php?pagecurrent=<?php echo $fyi;?>"><?php echo $fyi;?></a></li> 
	 <?php
	 }
	 ?>
	 <li><a href="enterprisehire_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">&raquo;</a></li>
	 </ul>   <span class="x-right" style="line-height:40px">共有数据：<span class="layui-badge"><?php echo $rowscount;?></span> 条</span>
</div>
</div>

<script>
	$('.dropdown-toggle').dropdown();
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
	laydate.render({
	elem: '#date'
	,range: true,
	theme:"#5cb85c"
	});
function delAll() {
var msg = "您真的确定要删除吗？\n\n请确认！"; 
 if (confirm(msg)==true){ 
 document.form2.submit();
 }else{ 
  return false; 
 } 
}</script>
</body>
</html>
