<meta charset="EUC-KR">

<?php
    include "../lib/dbconn.php";
    $userId= $_GET['userId'];
 
    // 값을 전달하지 않을 수도 있으니
    if(!$userId){
        echo "<div style=' font-size: 1.2em; text-align:center; font-family:sans-serif; color: brown; font-weight: bolder;'>
        아이디를 입력하세요.<br><br>";
        echo "
        <button type='button' onclick='popupClose()'
         style='background-color: brown; color: wheat; font-size: 1.2em;  border:1px solid wheat; border-radius: 8px;'>
         닫기</button></div>
         <script>
        function popupClose() {
         // window.opener.location.reload(); 부모창의 정보는 그대로두기
            window.close();
        }</script>";
        exit;
    }
 
    // 데이터베이스 접속 공통모듈 사용
    include "../lib/dbconn.php";
 
    // 전달받은 id가 member테이블에 있는지 검사
    $sql= "SELECT * FROM member WHERE userId='$userId'";
    $result= mysqli_query($conn, $sql);
    $rowNum=mysqli_num_rows($result);
 
    // $rowNum이 0이 아니면 중복
    if($rowNum){
        echo "<div style=' font-size: 1.2em; text-align:center; font-family:sans-serif; color: brown; font-weight: bolder;'> 
                아이디가 중복 됩니다.<br>다른 아이디를 사용하세요.<br><br>";
        echo "
        <button type='button' onclick='popupClose()'
         style='background-color: brown; color: wheat; font-size: 1.2em;  border:1px solid wheat; border-radius: 8px;'>
         닫기</button><script>
        function popupClose() {
         // window.opener.location.reload(); 부모창의 정보는 그대로두기
            window.close();
        }</script>";
    }else{
        echo "<div style=' font-size: 1.2em; text-align:center; font-family:sans-serif; color: #1E2C5C; font-weight: bolder;'> 
                사용가능한 아이디 입니다.<br><br>";
        echo "
        <button type='button' onclick='popupClose()'
         style='background-color: #1E2C5C; color: wheat; font-size: 1.2em;  border:1px solid wheat; border-radius: 8px;'>
         닫기</button><script>
        function popupClose() {
         // window.opener.location.reload(); 부모창의 정보는 그대로두기
            window.close();
        }</script>";
    }
 
    mysqli_close($conn);

?>
