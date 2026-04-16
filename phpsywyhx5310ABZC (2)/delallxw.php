
<?php
//验证登陆信息
include_once 'conn.php';
 $area_arr = array(); 
 
$area_arr = $_POST['bh']; 
$t=0;
foreach ($area_arr as $k=>$v){ 
$nbh=$nbh.$v.","; 
$t=$t+1;
}
$nbh=substr($nbh,0,strlen($nbh)-1);
if($t<1)
{
	echo "<script>javascript:alert('您未选中任何数据');history.back();</script>";
	die;
}
	
	
	$sql="delete from xinwentongzhi where id in ($nbh)";
	mysql_query($sql);
	$lb=$_POST['lb'];
	echo "<script language='javascript'> location.href='xinwentongzhi_list.php?ok=2&lb=$lb';</script>";
	
//}
?>