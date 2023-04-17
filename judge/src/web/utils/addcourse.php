<?php
require_once ('../include/db_info.inc.php');
$user_id="";
$course_id="";
if(isset($_SESSION[$OJ_NAME.'_'.'user_id']))
{
$user_id=$_SESSION[$OJ_NAME.'_'.'user_id'];

if(isset($_POST['course_id'])){
$course_id=$_POST['course_id'];
$sql_check_course="select count(*) from course where course_id=?";
$res_check_course=pdo_query($sql_check_course,$course_id)[0][0];
//echo "res_check: ".$res_check_course."<br>";
//echo "course_id: ".$course_id."<br>";
if($res_check_course==1){
    $sql_add_course="insert ignore into course_user (course_id,user_id,isteacher) values (?,?,0)";
    $res_add_course=pdo_query($sql_add_course,array($course_id,$user_id));
    echo "加入成功";
}else{
    echo "未找到该课程";
}
}else{
    echo "无课程号";//前端后端都校验，防止傻逼
}
}else{
    echo "未登录";
    exit(1);
}
