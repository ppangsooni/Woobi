<meta charset="EUC-KR">

<?php
    include "../lib/dbconn.php";
    $userId= $_GET['userId'];
 
    // ���� �������� ���� ���� ������
    if(!$userId){
        echo "<div style=' font-size: 1.2em; text-align:center; font-family:sans-serif; color: brown; font-weight: bolder;'>
        ���̵� �Է��ϼ���.<br><br>";
        echo "
        <button type='button' onclick='popupClose()'
         style='background-color: brown; color: wheat; font-size: 1.2em;  border:1px solid wheat; border-radius: 8px;'>
         �ݱ�</button></div>
         <script>
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
        echo "<div style=' font-size: 1.2em; text-align:center; font-family:sans-serif; color: brown; font-weight: bolder;'> 
                ���̵� �ߺ� �˴ϴ�.<br>�ٸ� ���̵� ����ϼ���.<br><br>";
        echo "
        <button type='button' onclick='popupClose()'
         style='background-color: brown; color: wheat; font-size: 1.2em;  border:1px solid wheat; border-radius: 8px;'>
         �ݱ�</button><script>
        function popupClose() {
         // window.opener.location.reload(); �θ�â�� ������ �״�εα�
            window.close();
        }</script>";
    }else{
        echo "<div style=' font-size: 1.2em; text-align:center; font-family:sans-serif; color: #1E2C5C; font-weight: bolder;'> 
                ��밡���� ���̵� �Դϴ�.<br><br>";
        echo "
        <button type='button' onclick='popupClose()'
         style='background-color: #1E2C5C; color: wheat; font-size: 1.2em;  border:1px solid wheat; border-radius: 8px;'>
         �ݱ�</button><script>
        function popupClose() {
         // window.opener.location.reload(); �θ�â�� ������ �״�εα�
            window.close();
        }</script>";
    }
 
    mysqli_close($conn);

?>
