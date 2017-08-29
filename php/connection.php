<?php
$serverLink=@mysql_connect("localhost","root","hzppqq")or die("连接服务器失败，程序中断执行！");
mysql_query("set names 'gbk'");

if($serverLink){
	echo "打开与MySQL服务器连接成功!";
	echo "</br>";
}

$dbLink=@mysql_select_db("muko01",$serverLink)or die("选择当前数据库失败，程序中断执行！");
if ($dbLink) {
	echo "选择muko01作为当前数据库！";
	echo "</br>";
	# code...
}
$close=@mysql_close($serverLink);

if($close){
	echo "关闭与MySQL服务器连接成功!";
	echo "</br>";
}else{
	echo "关闭与MySQL服务器连接失败!程序终断执行！";
	echo "</br>";
}
?>