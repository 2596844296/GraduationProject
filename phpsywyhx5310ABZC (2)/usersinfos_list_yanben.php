<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>用户信息</title>
<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<script src="ny/component/js/JQuery2.1.4.js"></script>
    <link rel="stylesheet" href="ny/component/style/components.css">
    <script src="ny/component/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="ny/css/bootstrap.css">
    <link rel="stylesheet" href="ny/css/plugins.css">
    <link rel="stylesheet" href="ny/css/main.css">
    <link rel="stylesheet" href="ny/css/themes.css">
</head>

<body>
    <div id="body">
        <ol class="breadcrumb">
            <li class="active"><a href="#">系统</a></li>
            <li>用户信息列表</li>
        </ol>
        <div class="barboxs">
           
           <div class="leftbox" >
			<form action="" method="post">
			 <div class="leftbox" >
              	  <div class='liselect'><input name="usernames" type="text" id="usernames" class="form-control example-typeahead" placeholder='用户名' style='width:120px;' /></div> <div class='liselect'><input name="names" type="text" id="names" class="form-control example-typeahead" placeholder='姓名' style='width:120px;' /></div>
                <div class="liselect ">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-success"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
           </div></form>  </div>
        </div>
        
 <div class="tablebox">
<table class="table table-bordered table-hover">
  <tr>
	<th >序号</th>
    <th>用户名</th>    <th>姓名</th>    <th align='center'>性别</th>    <th>密码</th>    <th>手机</th>    <th>身份证</th>    <th>备注</th>    
	
    <th align="center">添加时间</th>
    <th class="cell-small text-center"><i class="fa fa-bolt"></i> 操作</th>
  </tr>
  <?php 
    $sql="select * from usersinfos where 1=1";
  if ($_POST["usernames"]!=""){$nrequsernames=$_POST["usernames"];$sql=$sql." and usernames like '%$nrequsernames%'";}if ($_POST["names"]!=""){$nreqnames=$_POST["names"];$sql=$sql." and names like '%$nreqnames%'";}
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
   
    <td ><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,usernames);?></td>    <td><?php echo mysql_result($query,$i,names);?></td>    <td align='center'><?php if(mysql_result($query,$i,gender)=="男"){?><span class='label label-danger'><?php echo mysql_result($query,$i,gender);?></span><?php } else {?><span class='label label-success'><?php echo mysql_result($query,$i,gender);?></span><?php } ?></td>    <td><?php echo mysql_result($query,$i,pwd);?></td>    <td><?php echo mysql_result($query,$i,phone);?></td>    <td><?php echo mysql_result($query,$i,idcard);?></td>    <td><?php echo mysql_result($query,$i,memo);?></td>    
	
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td class="text-center">
	<div class="btn-group">
	
	<!--lianjie1-->
	</div>
 </td>
  </tr>
  	<?php
	}
}
?>
</table>
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
	 	echo "<li><a href='yaxnbenfexnye.php?pagecurrent=".$t."'>&laquo;</a></li>";
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
	 ><a href="yaxnbenfexnye.php?pagecurrent=<?php echo $fyi;?>"><?php echo $fyi;?></a></li> 
	 <?php
	 }
	 ?>
	 <li><a href="yaxnbenfexnye.php?pagecurrent=<?php echo $pagecurrent+1;?>">&raquo;</a></li>
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
</script>
</body>
</html>
