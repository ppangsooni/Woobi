<?php
 
    $userId= $_POST['userId'];
    $userPassword= $_POST['userPassword'];

 
    // ���̵�� ��й�ȣ �Է� ���� Ȯ��
    if(!$userId){
        // ���â �����ְ� ���� �������� �̵� [JS�� history��ü �̵�]
        // history.go(-1); : ���� ��������
        echo "
        <script>
            alert('���̵� �Է��ϼ���.');
            history.go(-1);
        </script>
        ";
         exit;
    }
    if(!$userPassword){
        // ���â �����ְ� ���� �������� �̵� [JS�� history��ü �̵�]
        // history.back(); : ���� ��������
        echo "
        <script>
            alert('��й�ȣ�� �Է��ϼ���.');
            history.back();
        </script>
        ";
         exit;
    }
    // exit�� �ȵǾ��ٸ� ���̵�� ����� ���޵� ���̹Ƿ� DB���� �ش� ���̵�� ����� üũ
 
    // DB ���� ������ ���
    include "../lib/dbconn.php";
 
    // ������
    $sql= "SELECT * FROM movie.member WHERE userId='$userId' and userPassword='$userPassword'";
    $result= mysqli_query($conn,$sql);
    // ���ǥ�κ��� ���ڵ� �� ������
    $rowNum= mysqli_num_rows($result);
 
    // $rowNum�� 0�̸� ���̵�� �н����尡 ���� �ʴ� ��
    if(!$rowNum){
        echo "
        <script>
            alert('���̵�� ��й�ȣ�� Ȯ���ϼ���.');
            history.back();
        </script>
        ";
        exit;
    }
 
    // exit�� �ȵǾ��ٸ� �α����� �Ǿ��ٴ� ����!!
    // �ٸ� ���������� �α��� �Ǿ��ٰ� �����ϱ� ����, ȸ�������� ���ǿ� ����
    // �ش��ϴ� id�� ȸ������ ������
    $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
 
    // ���ǿ� ����
    session_start();
    $_SESSION['userId']=$row['userId'];
    $_SESSION['userPassword']=$row['userPassword'];
    $_SESSION['grane']=$row['grane'];
    $_SESSION['userpoint']=$row['userpoint'];
 
    // ���������� �Ǿ����� index.php�������� �̵�
    echo "
        <script>
            alert('�α��ο� �����ϼ̽��ϴ�!');
            location.href='../index.php';
        </script>
    ";
?>
