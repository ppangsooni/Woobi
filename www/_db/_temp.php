<!DOCTYPE html>
<html>
<body>
<!--
	PHP���� �������� �����͸� �����ϰ� �޴� ���
	1. HTML ��(action)�� �̿��Ͽ� �����͸� ����.(�ִ°��� HTML/ �����͸� ������ JS)
	2. Ÿ������������ PHP�� �����͸� ����. (PHP)

	PHP���� �����͸� �޴¹��
	echo $_REQUEST["fname"];
	echo $_POST["fname"];
	$fname2  = $_GET["fname"];
-->

<form method="post" action="take.php?lname=lastName">
  <input type="text" name="fname">
  <input type="submit" value="����">
</form>
<hr>
<form method="get" action="take.php">
  <input type="text" name="fname">
  <input type="submit" value="����">
</form>



</body>
</html>
