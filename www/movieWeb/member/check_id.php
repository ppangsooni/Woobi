<meta charset="EUC-KR">
 
<?php
 
    $userId= $_GET['userId'];
 
    // ���� �������� ���� ���� ������
    if(!$userId){
        echo "���̵� �Է��ϼ���.";
        exit;
    }
 
    // �����ͺ��̽� ���� ������ ���
    include "../lib/dbconn.php";
 
    // ���޹��� id�� member���̺� �ִ��� �˻�
    $sql= "SELECT * FROM member WHERE userId='$userId'";
    $result= mysqli_query($conn, $sql);
    $rowNum=mysqli_num_rows($result);
 
    // $rowNum�� 0�� �ƴϸ� �ߺ�
    if($rowNum){
        echo "���̵� �ߺ� �˴ϴ�.<br>";
        echo "�ٸ� ���̵� ����ϼ���.<br>";
    }else{
        echo "��밡���� ���̵� �Դϴ�.<br>";
    }
 
    mysqli_close($conn);

?>