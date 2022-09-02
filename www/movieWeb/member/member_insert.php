<?php
include("../lib/dbconn.php");

    
    
    $userId= $_POST['userId'];
    $userPassword= $_POST['userPassword'];
    $userName= $_POST['userName'];
    $tel= $_POST['tel'];
    $birth= $_POST['birth'];
    $email= $_POST['email'];

    //등록일
    $create_at= date("Y-m-d H:i:s");

    
 
    // 중복된 아이디 여부를 확인해서 사용자에게 안내
    $sql= "SELECT * FROM member WHERE userId='$userId'";
    $result=mysqli_query($conn, $sql);
    $rowNum= mysqli_num_rows($result); //결과표로부터 레코드 수 얻어오기
 
    // 혹시 $rowNum이 0이 아니면 id가 있다는 것이므로 중복!!
    if($rowNum){
        // 경고창을 보여주면서 이전 회원가입 페이지로 다시 이동
        // history.back()  : 이전 페이지로 이동
        echo("
            <script>
                alert('해당 아이디가 존재합니다.');
                history.back(); 
            </script>
        ");
        // 중복이 되었으니 다음 작업들 못하도록.. php 종료
        exit;
    }
 
    //exit가 안되었다면 신규 id라는 것임
    //회원정보 insert
 
    //insert 쿼리문
    $sql= "INSERT INTO member(userId, userPassword, userName, tel, birth, email, grade, userPoint) VALUES('$userId', '$userPassword', '$userName','$tel','$birth','$email','5','0')";
 
    $conn -> query($sql);
    // 쿼리문 실행
    // mysqli_query($conn,$sql);
    mysqli_close($conn);
 
    // 데이터 저장이 완료된 후 index.php로 페이지 이동
    echo "
        <script>
        window.location.href='../index.php';
        alert('가입이 완료되었습니다. &#9787;')
        </script>
    "
    ;
?>
