<?php
include("../lib/dbconn.php");

$userId = $_SESSION['userId'];
$no = $_POST['potoplay_number'];
$potoplay_title = $_POST['potoplay_write_title'];
$potoplay_content = $_POST['text'];
$potoplay_date = date('Y-m-d H:i:s');
$image = $_POST['image'];
$URL = './potoplay_userlist_form.php';
$dir = "./_image/";

 
if($_FILES['image']['name']) {
	$imageFullName = strtolower($_FILES['image']['name']);
	$imageNameSlice = explode(".",$imageFullName);
	$imageName = $imageNameSlice[0];
	$imageType = $imageNameSlice[1];
	$image_ext = array('jpg','jpeg','gif','png');
	$dates = date("mdhis",time());
	$newImage = chr(rand(97,122)).chr(rand(97,122)).$dates.rand(1,9).".".$imageType;
	move_uploaded_file($_FILES['image']['tmp_name'],$dir.$newImage);

	$sql = "INSERT INTO potoplay_board set
    potoplay_number = '$no',
    userId = '$userId',
    potoplay_title = '$potoplay_title',
    potoplay_content = '$potoplay_content',
    movie_code = 'null',
    image =  '".$dir . $newImage ."',
    potoplay_like = 'null',
    potoplay_date = '$potoplay_date',
    potoplay_lock_post = 'null'
    ";

	$result = $conn->query($sql);
	
?>
	<script>
		alert("<?php echo "게시글이 등록되었습니다." ?>");
		location.replace("<?php echo $URL ?>");
	</script>
<?php
} else {
	echo "게시글 등록에 실패하였습니다.";
}



	

	
	
?>
