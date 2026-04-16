<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>产品信息详细</title>
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
            <li>产品信息</li>
        </ol>


        <div class="tabli">
            <span class="active">产品信息详细</span>
        </div>
					<?php
$sql="select * from goodsinfos where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<div class="card-body">
<table class="table table-bordered table-hover">
      <tr>
	  <td width='11%' height=44>产品编号：</td><td width='39%'><?php echo mysql_result($query,0,goodsnumbers);?></td><td  rowspan=4 align=center><a href=<?php echo mysql_result($query,0,goodspic);?> target=_blank><img src=<?php echo mysql_result($query,0,goodspic);?> width=228 height=215 border=0></a></td></tr><tr>      <td width='11%' height=44>产品类别：</td><td width='39%'><?php echo mysql_result($query,0,goodstypes);?></td></tr><tr>      <td width='11%' height=44>产品名称：</td><td width='39%'><?php echo mysql_result($query,0,goodsnamec);?></td></tr><tr>            <td width='11%' height=44>库存：</td><td width='39%'><?php echo mysql_result($query,0,stocks);?></td></tr><tr>            <td width='11%' height=100  >备注：</td><td width='39%' colspan=2 height=100 ><?php echo mysql_result($query,0,memo);?></td></tr><tr>      <td colspan=3 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" class='btn btn-primary m-r-5'   /> <input type="button" name="Submit2" onclick="javascript:window.print();" value='打印本页' class='btn btn-primary m-r-5'  /></td></tr>
    
     
  </table>
</div>

<?php
	}
?>
</div>
</body>
</html>

