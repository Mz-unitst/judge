<?php $show_title=$id." - 源代码查看 - $OJ_NAME"; ?>
<?php include("template/$OJ_TEMPLATE/header.php");?>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<div class="padding">
<link href='<?php echo $OJ_CDN_URL?>highlight/styles/shCore.css' rel='stylesheet' type='text/css'/>
<link href='<?php echo $OJ_CDN_URL?>highlight/styles/shThemeDefault.css' rel='stylesheet' type='text/css'/>
<script src='<?php echo $OJ_CDN_URL?>highlight/scripts/shCore.js' type='text/javascript'></script>
<script src='<?php echo $OJ_CDN_URL?>highlight/scripts/shBrushCpp.js' type='text/javascript'></script>
<script src='<?php echo $OJ_CDN_URL?>highlight/scripts/shBrushCss.js' type='text/javascript'></script>
<script src='<?php echo $OJ_CDN_URL?>highlight/scripts/shBrushJava.js' type='text/javascript'></script>
<script src='<?php echo $OJ_CDN_URL?>highlight/scripts/shBrushDelphi.js' type='text/javascript'></script>
<script src='<?php echo $OJ_CDN_URL?>highlight/scripts/shBrushRuby.js' type='text/javascript'></script>
<script src='<?php echo $OJ_CDN_URL?>highlight/scripts/shBrushBash.js' type='text/javascript'></script>
<script src='<?php echo $OJ_CDN_URL?>highlight/scripts/shBrushPython.js' type='text/javascript'></script>
<script src='<?php echo $OJ_CDN_URL?>highlight/scripts/shBrushPhp.js' type='text/javascript'></script>
<script src='<?php echo $OJ_CDN_URL?>highlight/scripts/shBrushPerl.js' type='text/javascript'></script>
<script src='<?php echo $OJ_CDN_URL?>highlight/scripts/shBrushCSharp.js' type='text/javascript'></script>
<script src='<?php echo $OJ_CDN_URL?>highlight/scripts/shBrushVb.js' type='text/javascript'></script>

<script language='javascript'>
SyntaxHighlighter.config.bloggerMode = false;
SyntaxHighlighter.config.clipboardSwf = 'highlight/scripts/clipboard.swf';
SyntaxHighlighter.all();
</script>
    <head>
        <style>
            .btn_add_course{width:104px;height:36px;background:url(../image/btn_addcourse.png) no-repeat 0 0;border:none; margin-bottom: 20px;}
            .btn_add_course:hover{background-position:0 -48px;}
            .btn_add_course:active{background-position:left -96px}
        </style>
        <script>
            $(document).ready(function() {
                //未成功获取单选框的值
                $('#form_verify_suspect_codee').on('submit', function(e) {
                    e.preventDefault(); // 阻止表单的默认提交行为

                    // 获取表单数据
                    var radioValue = $('input[name="choice"]').val();
                    alert("cnm1",radioValue);
                    // 发送Ajax请求
                    $.ajax({
                        url: '/utils/verify_suspect_code.php?sid=162',
                        type: 'POST',
                        data: { choice: radioValue },
                        success: function(response) {
                            $('#result').html(response);
                        },
                        error: function() {
                            $('#result').html('Error occurred during the request');
                        }
                    });
                });
            });
        </script>
    </head>

<div class="row">
    <div class="column">
      <h4 class="ui top attached block header"><?php echo $MSG_Description?></h4>
      <div class="ui bottom attached segment font-content"><?php echo $description; ?></div>
        <h4 class="ui top attached block header"><?php echo "提交代码"?></h4>
    </div>
  </div>


<?php
if ($ok==true) {
    //输出题目，仿照题目页面

    $brush=strtolower($language_name[$slanguage]);
    if ($brush=='pascal') {
        $brush='delphi';
    }
    if ($brush=='clang') {
        $brush='c';
    }
    if ($brush=='clang++') {
        $brush='c++';
    }
    if ($brush=='obj-c') {
        $brush='c';
    }
    if ($brush=='python3') {
        $brush='python';
    }
    if ($brush=='swift') {
        $brush='csharp';
    }
    echo "<pre class=\"brush:".$brush.";\">";
    ob_start();
    echo "/**************************************************************\n";
    echo "\tProblem: $sproblem_id\n\tUser: $suser_id [$nick]\n";
    echo "\tLanguage: ".$language_name[$slanguage]."\n\tResult: ".$judge_result[$sresult]."\n";
    if ($sresult==4) {
        echo "\tTime:".$stime." ms\n";
        echo "\tMemory:".$smemory." kb\n";
    }
    echo "****************************************************************/\n\n";
    $auth=ob_get_contents();
    ob_end_clean();
    echo htmlentities(str_replace("\n\r", "\n", $view_source), ENT_QUOTES, "utf-8")."\n".$auth."</pre>";

} else {
    echo "I am sorry, You could not view this code!";
}
?>
    <?php
    if(isset($_SESSION[$OJ_NAME.'_'.'user_id'] )){
        if($_SESSION[$OJ_NAME.'_'.'user_id']=='admin' ){
            echo "审核意见：";
            echo '<form id="form_verify_suspect_code" action="/utils/verify_suspect_code.php?sid=162" method="post">
        <input type="radio" id="yes" name="choice" value="是">
        <label for="yes">确认为正常代码</label><br>
        <input type="radio" id="no" name="choice" value="否">
        <label for="no">确认为异常代码</label><br>
        <input type="radio" id="a" name="choice" value="无法确认">
        <label for="a">无法确认</label><br>
        <button type="submit" class="btn_add_course" >提交</button>
    </form>';
        }
    }
    ?>

</div>

<?php include("template/$OJ_TEMPLATE/footer.php");?>

