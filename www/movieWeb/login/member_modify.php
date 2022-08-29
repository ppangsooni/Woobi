<?php
     include ("../lib/dbconn.php");

    //id만 GET으로 전달받을 수 있음
    $userId= $_GET['userId'];
 
    // post로 전달받은 값들
    $userPassword= $_POST['userPassword'];
    $userName= $_POST['userName'];
    $tel= $_POST['tel'];
    $birth= $_POST['birth'];
    $email= $_POST['email'];
 

 
    // 업데이트 쿼리문
    $sql= "UPDATE member SET 
    userPassword='$userPassword', 
    userName='$userName', 
    tel='$tel', 
    birth='$birth', 
    email='$email' 
    WHERE userId='$userId'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
 
    echo "
    <script>
        alert('정보수정이 완료되었습니다.');
        // location.href='../index.php';
    </script>
    ";
 
?>
