<?php
require_once('./include/db_info.inc.php');
//OJ查看MOODLE课程
?>
<?php
$show_title = "课程信息 - $OJ_NAME";
include("template/$OJ_TEMPLATE/header.php");
?>

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
    $courseCount=count($res_get_enrolid);
    if($courseCount<=0) exit(1);
    $coursetable[$courseCount][2];
    $courseIndex=0;
//    echo 'enrolid---userid<br>';
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
//        echo "courseid:".$res_get_coursename[0]['id']."  course_name:".$res_get_coursename[0]['fullname']."<br>";
        $coursetable[$courseIndex][0]=$res_get_coursename[0]['id'];
        $coursetable[$courseIndex][1]=$res_get_coursename[0]['fullname'];
        $courseIndex++;
    }

}else{
    echo("未登录<br>");
    exit(1);
}
?>



<!DOCTYPE html>
<html>
<head>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: #f5f5f5;
        }


    </style>

</head>
<body>

<h1>课程信息</h1>

<div id="result"></div>
<table class="ui selectable celled table">

    <thead>
    <tr>
        <th>课程ID</th>
        <th>课程名称</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($courseCount > 0) {
        for($courseIndex=0;$courseIndex<$courseCount;$courseIndex++){
            echo "<tr>";
            echo "<td>" . $coursetable[$courseIndex][0] . "</td>\n";
            echo "<td><a href='contest.php?course_id=".$coursetable[$courseIndex][0]."'> " . $coursetable[$courseIndex][1] . "</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='4'>暂无课程信息</td></tr>";
    }
    ?>
    </tbody>
</table>

</body>
</html>
<?php include("template/$OJ_TEMPLATE/footer.php");
?>
