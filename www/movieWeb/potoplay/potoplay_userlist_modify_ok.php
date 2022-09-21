<?php
include("../lib/dbconn.php");
$no = $_GET['potoplay_number'];

$potoplay_title = $_POST['potoplay_write_title'];
// die($potoplay_title);
$image = $_POST['potoplay_write_files'];
$potoplay_content = $_POST['text'];
// $sql = "update potoplay_board set potoplay_title='".$potoplay_title."',image='".$image."',potoplay_content='".$potoplay_content."'where potoplay_number='".$no."'"; 
$dir = "./_image/";

$fileName = "";

if($_FILES['image']['name']) {
	$imageFullName = strtolower($_FILES['image']['name']);
	$imageNameSlice = explode(".",$imageFullName);
	$imageName = $imageNameSlice[0];
	$imageType = $imageNameSlice[1];
	$image_ext = array('jpg','jpeg','gif','png');
	$dates = date("mdhis",time());
	$newImage = chr(rand(97,122)).chr(rand(97,122)).$dates.rand(1,9).".".$imageType;
	move_uploaded_file($_FILES['image']['tmp_name'],$dir.$newImage);

    $fileName="image =  '".$dir . $newImage ."',";
} 
// if(!$potoplay_title) {
//     $potoplay_title = $_POST['potoplay_write_title'];
// }
$sql = "UPDATE potoplay_board set
potoplay_title = '".$potoplay_title."',
$fileName
potoplay_content = '".$potoplay_content."'

    WHERE potoplay_number='".$no."'
";

$result = $conn->query($sql);
	
?>
	<script>
		alert("<?php echo "수정되었습니다." ?>");
	</script>
    <meta http-equiv="refresh" content="0 url=./potoplay_list_view_form.php?potoplay_number=<?php echo $no?>">
<?php

	
?>

