<?php
include("../lib/dbconn.php");
$no = $_GET['potoplay_number'];

$sql = "DELETE FROM potoplay_board
    WHERE potoplay_number='".$no."'";

$result = $conn->query($sql);
	
?>
	<script>
		alert("<?php echo "�����Ǿ����ϴ�.." ?>");
	</script>
    <meta http-equiv="refresh" content="0 url=./potoplay_userlist_form.php">


