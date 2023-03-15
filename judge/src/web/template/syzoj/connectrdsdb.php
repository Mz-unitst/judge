<?php

$servername = "rm-bp1fhm86orq5947ns.mysql.rds.aliyuncs.com";
$username = "zstu";
$password = "Zstu1234";

// 创建连接
$conn_rds = new mysqli($servername, $username, $password,"code");

// 检测连接
if ($conn_rds->connect_error) {
    die("连接失败: " . $conn_rds->connect_error);
}
$sql="select * from tag where tagno!=0";
$res_tags=$conn_rds->query($sql);

