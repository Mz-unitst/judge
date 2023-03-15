<?php

$servername = "rm-bp1fhm86orq5947ns.mysql.rds.aliyuncs.com";
$username = "zstu";
$password = "Zstu1234";

// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功";

mysqli_close($conn);
