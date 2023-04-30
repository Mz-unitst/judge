<?php $show_title=$id." - 源代码查看 - $OJ_NAME"; ?>
<?php include("template/$OJ_TEMPLATE/header.php");?>
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
<div class="row">
    <div class="column">
      <h4 class="ui top attached block header"><?php echo $MSG_Description?></h4>
      <div class="ui bottom attached segment font-content"><?php echo $description; ?></div>
    </div>
  </div>
    <br>
    <h4 class="ui top attached block header"><?php echo "提交代码"?></h4>
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
    echo "是否确认为正常代码";
} else {
    echo "I am sorry, You could not view this code!";
}
?>
    <form action="a.php" method="post">
        <input type="radio" id="yes" name="choice" value="是">
        <label for="yes">是</label><br>
        <input type="radio" id="no" name="choice" value="否">
        <label for="no">否</label><br>
        <input type="submit" value="确认">
    </form>
</div>

<?php include("template/$OJ_TEMPLATE/footer.php");?>

