<?php
$serverLink=@mysql_connect("localhost","root","hzppqq")or die("连接服务器失败，程序中断执行！");
mysql_query("set names utf8");
$dbLink=@mysql_select_db("muko01",$serverLink)or die("选择当前数据库失败，程序中断执行！");
$insertSQL="insert into user values(null,'muko','abc123','女','2')";

$inserted=mysql_query($insertSQL);
echo "当前插入记录的user_id是:".mysql_insert_id()."</br>";
$close = @mysql_close($serverLink);
?>