<?php
require_once('./include/db_info.inc.php');
?>

    <?php
    $user_id="";
    $sqlcourse="select * from course join  course_user on course.course_id=course_user.course_id";
    if(isset($_SESSION[$OJ_NAME.'_'.'user_id']))
    {
        $user_id=$_SESSION[$OJ_NAME.'_'.'user_id'];
        $sqlcourse=$sqlcourse." where user_id='".$user_id."'";
    }else{
        $sqlcourse="";
    }

    $courseRes=pdo_query($sqlcourse);
    $courseCount=count($courseRes);
    $coursetable[$courseCount+1][3];
    if ($courseCount > 0) {
        for($courseIndex=0; $courseIndex<$courseCount; $courseIndex++){
            $course_id=$courseRes[$courseIndex]["course_id"];
            $course_name=$courseRes[$courseIndex]["course_name"];
            $teachers_id="";
            $sqlteacher="select user_id from course_user where course_id=? and isteacher=1";
            $teachers_id=pdo_query($sqlteacher,$course_id);
            $n_teachers=count($teachers_id);
            $sqlstudentCount="select count(*) from course_user where course_id=? and isteacher=0";
            $studentCount=pdo_query($sqlstudentCount,$course_id)[0][0];
            $teachers_names="";
            $tmp[$n_teachers]="";
            for($j=0;$j<$n_teachers;$j++){
                $teacher_id=$teachers_id[$j]['user_id'];
                $sqlteachernick="select nick from users where user_id=?";
                $res_teacher_nicks=pdo_query($sqlteachernick,$teacher_id);
                if($j!=0)
                    $teachers_names=$teachers_names.",".$res_teacher_nicks[0]['nick'];
                else{
                    $teachers_names=$teachers_names.$res_teacher_nicks[0]['nick'];
                }
            }
            $coursetable[$courseIndex][0]=$courseRes[$courseIndex]["course_id"];
            $coursetable[$courseIndex][1]=$courseRes[$courseIndex]["course_name"];
            $coursetable[$courseIndex][2]=$teachers_names;
            $coursetable[$courseIndex][3]=$studentCount;
        }
    }

require("template/".$OJ_TEMPLATE."/mycourses.php");
if (file_exists('./include/cache_end.php')) {
    require_once('./include/cache_end.php');
}
    ?>
