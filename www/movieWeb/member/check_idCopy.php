<meta charset="utf-8">

<?php
    include "../lib/dbconn.php";
    $userId= $_GET['userId'];
 
    // ���� �������� ���� ���� ������
    if(!$userId){
        echo "<div>���̵� �Է��ϼ���.";
        echo "<button type='button' onclick='popupClose()'>�ݱ�</button><script>
        function popupClose() {
            // window.opener.location.reload(); �θ�â�� ������ �״�εα�
            window.close();
        }</script>";
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
        echo $id_No;
    }else{
        echo "��밡���� ���̵� �Դϴ�.<br>";
    }
 
    mysqli_close($conn);

?>