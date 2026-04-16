<?php 
session_start();
include_once 'conn.php';

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
            <li>企业信息列表</li>
        </ol>
        <div class="barboxs">
            <button class="btn btn-success pull-left" data-toggle="tooltip" title="" data-placement="right" onClick="location.href='enterpriseinfos_listxls.php';" style="cursor:pointer"
                data-original-title="导出excel"><i class="fa fa-file-word-o"></i></button>
            <button class="btn btn-warning pull-left ml10" data-toggle="tooltip" title="" data-placement="right" onClick="window.print()" style="cursor:pointer"
                data-original-title="打印本页"><i class="fa fa-level-down"></i></button>
            <button class="btn btn-danger pull-left ml10" data-toggle="tooltip" title="" data-placement="right"  onClick="delAll()" style="cursor:pointer"
                data-original-title="批量删除"><i class="fa fa-trash-o"></i></button>
           <div class="leftbox" >
			<form action="" method="post">
			 <div class="leftbox" >
              	  <div class='liselect'><input name="enterprisenumbers" type="text" id="enterprisenumbers" class="form-control example-typeahead" placeholder='企业编号' style='width:120px;' /></div> <div class='liselect'><input name="enterprisenamec" type="text" id="enterprisenamec" class="form-control example-typeahead" placeholder='企业名称' style='width:120px;' /></div><div class='liselect'><select id='enterprisetypes' name='enterprisetypes' class='form-control' ></select></div><div class='liselect'><select id='fields' name='fields' class='form-control' ></select></div>
                <div class="liselect ">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-success"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
           </div></form>  </div>
        </div>
		<div class='push'><button class='btn btn-success pull-left' onClick="location.href='enterpriseinfos_add.php';"><i class='fa fa-plus'></i> 发布新数据 </button></div>
 <div class="tablebox">
 <form name="form2" method="post" action="delall.php"> 	
<table class="table table-bordered table-hover">
  <tr>
     <th ><input name="plxz" type="checkbox" id="plxz" onClick="checkall();" value="1" />
	<input name="tablename" type="hidden" id="tablename" value="enterpriseinfos" /><input name="comew" type="hidden" id="comew" value="enterpriseinfos_list" />
	</th>
	<th >序号</th>
    <th>企业编号</th>    <th>企业名称</th>    <th>图片</th>    <th>视频宣传</th>    <th>企业类型</th>    <th>所属行业</th>    <th>负责人</th>    <th>联系电话</th>    <th>注册资金</th>    <th>地址</th>    
	<th align="center">评论管理</td>
    <th align="center">添加时间</th>
    <th class="cell-small text-center"><i class="fa fa-bolt"></i> 操作</th>
  </tr>
  <?php 
    $sql="select * from enterpriseinfos where 1=1";
  if ($_POST["enterprisenumbers"]!=""){$nreqenterprisenumbers=$_POST["enterprisenumbers"];$sql=$sql." and enterprisenumbers like '%$nreqenterprisenumbers%'";}if ($_POST["enterprisenamec"]!=""){$nreqenterprisenamec=$_POST["enterprisenamec"];$sql=$sql." and enterprisenamec like '%$nreqenterprisenamec%'";}if ($_POST["enterprisetypes"]!=""){$nreqenterprisetypes=$_POST["enterprisetypes"];$sql=$sql." and enterprisetypes like '%$nreqenterprisetypes%'";}if ($_POST["fields"]!=""){$nreqfields=$_POST["fields"];$sql=$sql." and fields like '%$nreqfields%'";}
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
    <td><?php echo mysql_result($query,$i,enterprisenumbers);?></td>    <td><?php echo mysql_result($query,$i,enterprisenamec);?></td>    <td width='80'><a href="<?php echo mysql_result($query,$i,pic) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,pic) ?>' width='45' height='50' border='0'></a></td>    <td><a href="play.php?spwj=<?php echo mysql_result($query,$i,videosadvertising);?>" target='_blank'>播放</a></td>    <td><?php echo mysql_result($query,$i,enterprisetypes);?></td>    <td><?php echo mysql_result($query,$i,fields);?></td>    <td><?php echo mysql_result($query,$i,incharger);?></td>    <td><?php echo mysql_result($query,$i,lianxitel);?></td>    <td><?php echo mysql_result($query,$i,signinfund);?></td>    <td><?php echo mysql_result($query,$i,address);?></td>        
	<td align="center"><a class="label label-success" href="pinglun_list.php?id=<?php echo mysql_result($query,$i,"id");?>&biao=enterpriseinfos">评论管理</a></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td class="text-center">
	<div class="btn-group">
<a href="enterpriseinfosdetail.php?id=<?php echo mysql_result($query,$i,id);?>" target="_blank" class='btn btn-xs btn-info' data-toggle='tooltip' data-placement='top' title='前台预览'><i class='fa fa-info-circle'></i></a>
    <a href="enterpriseinfos_updt.php?id=<?php echo mysql_result($query,$i,"id");?>" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="修改"><i class="fa fa-pencil"></i></a>
    <a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=enterpriseinfos" onClick="return confirm('真的要删除？')" class="btn btn-xs btn-danger" data-toggle="tooltip"  data-placement="top" title="删除"><i class="fa fa-trash-o"></i></a>
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
	 	echo "<li><a href='enterpriseinfos_list.php?pagecurrent=".$t."'>&laquo;</a></li>";
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
	 ><a href="enterpriseinfos_list.php?pagecurrent=<?php echo $fyi;?>"><?php echo $fyi;?></a></li> 
	 <?php
	 }
	 ?>
	 <li><a href="enterpriseinfos_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">&raquo;</a></li>
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
