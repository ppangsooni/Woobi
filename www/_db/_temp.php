<!DOCTYPE html>
<html>
<body>
<!--
	PHP에서 페이지간 데이터를 전송하고 받는 방법
	1. HTML 폼(action)을 이용하여 데이터를 수집.(주는것은 HTML/ 데이터를 수집은 JS)
	2. 타켓페이지에서 PHP로 데이터를 받음. (PHP)

	PHP에서 데이터를 받는방법
	echo $_REQUEST["fname"];
	echo $_POST["fname"];
	$fname2  = $_GET["fname"];
-->

<form method="post" action="take.php?lname=lastName">
  <input type="text" name="fname">
  <input type="submit" value="전송">
</form>
<hr>
<form method="get" action="take.php">
  <input type="text" name="fname">
  <input type="submit" value="전송">
</form>



</body>
</html>
