<?php
     include ("../lib/dbconn.php");

    //id�� GET���� ���޹��� �� ����
    $userId= $_GET['userId'];
 
    // post�� ���޹��� ����
    $userPassword= $_POST['userPassword'];
    $userName= $_POST['userName'];
    $tel= $_POST['tel'];
    $birth= $_POST['birth'];
    $email= $_POST['email'];
 

 
    // ������Ʈ ������
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
        alert('���������� �Ϸ�Ǿ����ϴ�.');
        // location.href='../index.php';
    </script>
    ";
 
?>
