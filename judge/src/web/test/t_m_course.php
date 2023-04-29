<?php
require_once('../include/db_info.inc.php');
//OJ查看MOODLE课程
?>


<script src="echarts.min.js"></script>
<?php
if(isset($_SESSION[$OJ_NAME.'_'.'user_id']))
{
    $user_id=$_SESSION[$OJ_NAME.'_'.'user_id'];
    $sql_get_username="select * from moodle.view_user where username=?";
    $res_get_username=pdo_query($sql_get_username,$user_id);
    $user_id=$res_get_username[0]['id'];
//    echo "userid:".$user_id."<br>";
    $sql_get_enrolid="select * from moodle.view_user_enrol where userid=?";
    $res_get_enrolid=pdo_query($sql_get_enrolid,$user_id);
//    echo 'enrolid---userid<br>';
    echo count($res_get_enrolid);
    $sql_get_courseid="select * from moodle.view_enrol where id=?";
    $sql_get_coursename="select * from moodle.view_course where id=?";
    foreach($res_get_enrolid as $row){
//        foreach ($row as $key => $value){
//            echo $key.":".$value."     <br>";
//        }
//        echo $row['enrolid']."---".$row['userid'];
//        echo "<br>";
        $res_get_courseid=pdo_query($sql_get_courseid,$row['enrolid']);
        $res_get_coursename=pdo_query($sql_get_coursename,$res_get_courseid[0]['courseid']);
        echo "courseid:".$res_get_coursename[0]['id']."  course_name:".$res_get_coursename[0]['fullname']."<br>";
    }

}else{
    echo("未登录<br>");
    exit(1);
}
?>


