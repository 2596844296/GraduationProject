<?php 
include_once 'conn.php';
$id=$_GET["id"];
$biao=$_GET["biao"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>评论</title>
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
            <li>评论列表</li>
        </ol>
		
		 <div class="barboxs">
            <button class="btn btn-success pull-left" data-toggle="tooltip" title="" data-placement="right" onClick="location.href='cheliangxinxi_listxls.php';" style="cursor:pointer"
                data-original-title="导出excel"><i class="fa fa-file-word-o"></i></button>
            <button class="btn btn-warning pull-left ml10" data-toggle="tooltip" title="" data-placement="right" onClick="window.print()" style="cursor:pointer"
                data-original-title="打印本页"><i class="fa fa-level-down"></i></button>
            <button class="btn btn-danger pull-left ml10" data-toggle="tooltip" title="" data-placement="right"  onClick="delAll()" style="cursor:pointer"
                data-original-title="批量删除"><i class="fa fa-trash-o"></i></button>
           <div class="leftbox" >
			<form action="" method="post">
			 <div class="leftbox" >
              	  <div class='liselect'><input name="bh" type="text" id="bh" class="form-control example-typeahead" placeholder='评论内容' style='width:120px;' /></div>
				 <div class='liselect'><input name="mc" type="text" id="mc" class="form-control example-typeahead" placeholder='评论人' style='width:120px;' /></div>
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
 <form name="form2" method="post" action="delall.php"> 	
<table class="table table-bordered table-hover"> 
  <tr>
    <td width="39" bgcolor="#EBE2FE">序号</td>
    <td width="73" bgcolor='#EBE2FE'>数据ID</td>
    <td width="309" height="30" bgcolor='#EBE2FE'>留言内容</td>
    <td width="175" bgcolor='#EBE2FE'>评分</td>
    <td width="177" bgcolor='#EBE2FE'>评论人</td>
    <td width="83" align="center" bgcolor="#EBE2FE">添加时间</td>
    <td width="52" align="center" bgcolor="#EBE2FE">操作</td>
  </tr>
  <?php 
    $sql="select * from pinglun where wenzhangID=$id and biao='$biao'";
  if ($_POST["bh"]!="")
{
  	$nreqbh=$_POST["bh"];
  	$sql=$sql." and pinglunneirong like '%$nreqbh%'";
}
     if ($_POST["mc"]!="")
{
  	$nreqmc=$_POST["mc"];
  	$sql=$sql." and pinglunren like '%$nreqmc%'";
}
  $sql=$sql." order by id desc";
  
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
    <td width="39"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,wenzhangID);?></td><td><?php echo mysql_result($query,$i,pinglunneirong);?></td>
    <td><?php echo mysql_result($query,$i,pingfen);?></td>
    <td><?php echo mysql_result($query,$i,pinglunren);?></td>
    <td width="83" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="52" align="center">
	<a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=pinglun" onClick="return confirm('真的要删除？')" class="btn btn-xs btn-danger" data-toggle="tooltip"  data-placement="top" title="删除"><i class="fa fa-trash-o"></i></a>
	 </td>
  </tr>
  	<?php
	}
}
?>
</table>
</form>
</div>

<p>&nbsp; </p>

</body>
</html>

