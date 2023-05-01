<?php
require_once('../include/db_info.inc.php');
if(isset($_SESSION[$OJ_NAME.'_'.'user_id'])){
    if($_SESSION[$OJ_NAME.'_'.'user_id']!='admin'){
        exit(1);
    }
}
if(isset($_GET['sid'])) {
    $sid=$_GET['sid'];
    if(isset($_POST['choice']))
        $verify=$_POST['choice'];
}
if($verify=='是'){
    $sql_update_suspect="UPDATE suspect_solution SET `is_verified_by_admin`=1 WHERE solution_id=?";
    $res=pdo_query($sql_update_suspect,$sid);
    echo "成功标记为正常代码";
}
else if($verify=='否'){
    $sql_update_suspect="UPDATE suspect_solution SET `is_verified_by_admin`=2 WHERE solution_id=?";
    $res=pdo_query($sql_update_suspect,$sid);
    echo "成功标记为异常代码";
}else{
    echo "无法确认该代码是否异常";
}