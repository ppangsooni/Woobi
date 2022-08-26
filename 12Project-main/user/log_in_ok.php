<?php
include("../common.php");
$id = $_POST['userId'];
$pw = $_POST['userPw'];
$sql = "
SELECT id,pw,no 
FROM project_user
where id = '$id'";
$res = $conn -> query($sql);
$db_pw = mysqli_fetch_assoc($res);
if($db_pw){ 
    if($pw == $db_pw['pw']){
        $_SESSION['userId'] = $db_pw['id'];
        $_SESSION['userPw'] = $db_pw['pw'];
        echo"
        <script>
        console.log('로그인했다');
        alert('로그인되었습니다');
        location.href='../home.html';
        </script>
        ";
    } else{
        echo"
        <script>
        alert('아이디 혹은 비밀번호가 다릅니다');
        history.back()
        </script>
        ";
    }
}
else{
    echo"
    <script>
    alert('아이디 혹은 비밀번호가 다릅니다');
    history.back()
    </script>
    ";
}
?>
