<?php
require_once('./include/db_info.inc.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>课程信息</title>
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
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
<h1>课程信息</h1>
<!--todo
将表格换位学习通那样的？
添加链接功能
添加封面功能？
改为只接收所需数据，界面显示放到template中
-->
    <table>
        <thead>
        <tr>
            <th>课程名称</th>
            <th>任课老师</th>
            <th>学生人数</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // 查询课程信息
        $sql="select * from course";
        $res=pdo_query($sql);
        $n_course=count($res);
        $cur=0;
        // 输出课程信息
        if ($n_course > 0) {
            for($i=0;$i<$n_course;$i++){
                $course_id=$res[$i]["course_id"];
                $course_name=$res[$i]["course_name"];
                $teachers_id="";
                $sql="select user_id from course_user where course_id=? and isteacher=1";
                $teachers_id=pdo_query($sql,$course_id);
                $n_teachers=count($teachers_id);
                $sql="select count(*) from course_user where course_id=? and isteacher=0";
                $n_students=pdo_query($sql,$course_id)[0][0];
                $teachers_names="";
//                echo $course_name."有 ".$n_teachers." 个老师<br>";
                $tmp[$n_teachers]="";
                for($j=0;$j<$n_teachers;$j++){
                    $teacher_id=$teachers_id[$j]['user_id'];
//                    echo $teacher_id;
                    $sql1="select nick from users where user_id=?";
                    $res_teacher_nicks=pdo_query($sql1,$teacher_id);
//                    echo "当前nick---  ".$res_teacher_nicks[0]['nick']."-----";
                    if($j!=0)
                    $teachers_names=$teachers_names.",".$res_teacher_nicks[0]['nick'];
                    else{
                        $teachers_names=$teachers_names.$res_teacher_nicks[0]['nick'];
                    }
//                    echo '老师是： '.$teachers_names."<br>";
                }
//                echo $teachers_id[0]['user_id'];
                echo "<tr>";
                echo "<td><a href='contest.php'> " . $res[$i]["course_name"] . "</a></td>";
                echo "<td>" . $teachers_names . "</td>\n";
                echo "<td>" . $n_students . "</td>\n";
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