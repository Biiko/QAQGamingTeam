<?php

$serverLink=@mysql_connect("localhost","root","hzppqq")or die("连接服务器失败，程序中断执行！");
mysql_query("set names utf8");
$dbLink=@mysql_select_db("muko01",$serverLink)or die("选择当前数据库失败，程序中断执行！");

$deleteSQL="delete from user where user_name='muko'";
$delete=mysql_query($deleteSQL);
$deleteRows=mysql_affected_rows();
echo "删除的行数为：$deleteRows</br>";

$close=@mysql_close($serverLink);
?>