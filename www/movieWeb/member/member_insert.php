<?php
include("../lib/dbconn.php");

    
    
    $userId= $_POST['userId'];
    $userPassword= $_POST['userPassword'];
    $userName= $_POST['userName'];
    $tel= $_POST['tel'];
    $birth= $_POST['birth'];
    $email= $_POST['email'];

    //�����
    $create_at= date("Y-m-d H:i:s");

    
 
    // �ߺ��� ���̵� ���θ� Ȯ���ؼ� ����ڿ��� �ȳ�
    $sql= "SELECT * FROM member WHERE userId='$userId'";
    $result=mysqli_query($conn, $sql);
    $rowNum= mysqli_num_rows($result); //���ǥ�κ��� ���ڵ� �� ������
 
    // Ȥ�� $rowNum�� 0�� �ƴϸ� id�� �ִٴ� ���̹Ƿ� �ߺ�!!
    if($rowNum){
        // ���â�� �����ָ鼭 ���� ȸ������ �������� �ٽ� �̵�
        // history.back()  : ���� �������� �̵�
        echo("
            <script>
                alert('�ش� ���̵� �����մϴ�.');
                history.back(); 
            </script>
        ");
        // �ߺ��� �Ǿ����� ���� �۾��� ���ϵ���.. php ����
        exit;
    }
 
    //exit�� �ȵǾ��ٸ� �ű� id��� ����
    //ȸ������ insert
 
    //insert ������
    $sql= "INSERT INTO member(userId, userPassword, userName, tel, birth, email, grade, userPoint) VALUES('$userId', '$userPassword', '$userName','$tel','$birth','$email','5','0')";
 
    $conn -> query($sql);
    // ������ ����
    // mysqli_query($conn,$sql);
    mysqli_close($conn);
 
    // ������ ������ �Ϸ�� �� index.php�� ������ �̵�
    echo "
        <script>
        window.location.href='../index.php';
        alert('������ �Ϸ�Ǿ����ϴ�. &#9787;')
        </script>
    "
    ;
?>
