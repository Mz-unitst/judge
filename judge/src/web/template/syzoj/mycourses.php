<?php
require_once('./include/db_info.inc.php');
include("template/$OJ_TEMPLATE/header.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>课程信息</title>
    <style>
        /*<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>*/
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

        .btn_add_course{width:104px;height:36px;background:url(../image/btn_addcourse.png) no-repeat 0 0;border:none; margin-bottom: 20px;margin-left: 10px;}
        .btn_add_course:hover{background-position:0 -48px;}
        .btn_add_course:active{background-position:left -96px}

        .dataSearch_input{ width:170px; height:34px;font-size:14px; color:#131B26;  border:1px solid #D5D7D9;background:none;z-index:2;padding:0 14px; border-radius:40px;}
        .dataSearch_input:hover{border: 1px solid #3A8BFF;}
        .dataSearch_input:focus {outline:none;border: 1px solid #3A8BFF;/*box-shadow: 0 0 4px 0 #75BAFF;*/border-radius: 40px;}

    </style>

</head>
<body>

<script >
    $(document).ready(function() {
        $("#form_add_course").submit(function(event) {
            event.preventDefault(); // 阻止表单的默认提交行为
            var formData = $(this).serialize(); // 获取表单数据
            // alert(formData);
            $.ajax({
                type: "POST",
                url: "utils/addcourse.php",
                data: formData,
                success: function(response) {
                    // $("#result").html(response); // 将服务器返回的结果显示在result div中
                    alert(response);
                    location.reload(); // 刷新当前页面
                }
            });
        });
    });
</script>
<h1>课程信息</h1>


<form id="form_add_course" method="post">
    <input type="text" id="course_id" name="course_id" placeholder="课程号" class="dataSearch_input" required />
    <button type="submit"   class="btn_add_course"  >加入课程</button>
</form>
<div id="result"></div>
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
    if ($courseCount > 0) {
        for($courseIndex=0;$courseIndex<$courseCount;$courseIndex++){
            echo "<tr>";
            echo "<td><a href='contest.php'> " . $coursetable[$courseIndex][0] . "</a></td>";
            echo "<td>" . $coursetable[$courseIndex][1] . "</td>\n";
            echo "<td>" . $coursetable[$courseIndex][2] . "</td>\n";
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
<?php include("template/$OJ_TEMPLATE/footer.php");?>