<?php
session_start();
include_once 'conn.php';
?>
<html>
<head>
<title>所属行业统计</title>
<script src="echarts.min.js"></script>
</head>
<body >
<?php
$i=0;
$tleixing="";
$sql="select distinct(fields) as ss from enterpriseinfos";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
	for($i=0;$i<$rowscount;$i++)
	 {
		$tleixing=$tleixing."'".mysql_result($query,$i,"ss")."',";
	}
}
if($i>0)
 {
 	$tleixing=substr($tleixing,0,strlen($tleixing)-1);
 }
$b=explode(",",$tleixing);
$x="";
$ttz="";
for($i2=0;$i2<sizeof($b);$i2++){
	$sql="select count(id) as bbb from enterpriseinfos where fields=".$b[$i2]."";
	$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
	$ttz=mysql_result($query,0,"bbb");
}
$x=$x."{value: ".$ttz." , name:".$b[$i2]."},";
}
?>
<div id="main" style="width:100%;height:480px" ></div>
<script type="text/javascript">
    var myChart = echarts.init(document.getElementById('main'));
        window.onresize = myChart.resize;
    var option = {
        title: {
            text: '所属行业统计图'
        },
        tooltip: {},
        legend: {
            data:[<?php echo $tleixing ?>]
        },
        grid: {
                left: '5%',
                right: '5%',
                bottom: '5%',
                width: '90%',
                containLabel: true
            },
        xAxis: {
        },
        yAxis: {
          data: []
        },
        series: [
             {
                name: '所属行业比例',
                type: 'pie',
                radius: 150,
        center: ['50%', '50%'],
                data: [<?php echo $x ?>]
            },
        ]
    };
    myChart.setOption(option);
</script>
</body>
</html>
