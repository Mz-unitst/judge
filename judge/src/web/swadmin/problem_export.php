<?php require_once("admin-header.php");
if (!(isset($_SESSION[$OJ_NAME.'_'.'administrator']))) {
    echo "<a href='../loginpage.php'>Please Login First!</a>";
    exit(1);
}
?>

<div class="container">
<form action='problem_export_xml.php' method=post>
	<b>Export Problem:</b><br />
	from pid:<input type=text size=10 name="start" value=1000>
	to pid:<input type=text size=10 name="end" value=1000><br />
	or in<input type=text size=40 name="in" value=""><br />
	<input type='hidden' name='do' value='do'>
	<input type=submit name=submit value='Export'>
   <input type=submit value='Download'>
   <?php require_once("../include/set_post_key.php");?>
</form>
* from-to will working if empty IN <br>
* if using IN,from-to will not working.<br>
* IN can go with "," seperated problem_ids like [1000,1020]
</div>
