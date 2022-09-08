<!-- 확인하는 창 -->
<?php
    $dns = "mysql:host=localhost;dbname=movie;charset=utf8";
    $username = "root";
    $password = "hye0";

    
    try { 
        $db = new PDO($dns, $username, $password);
        echo '접속성공 축하합니다!';
    } catch (PDOException $th) {
        echo '접속실패 : ' . $th->getMessage();
    }        


?>