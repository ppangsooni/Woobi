<?php
$servername = "localhost";
$username = "root";
$password ="hye0";
$db = "movie";

$conn = new mysqli($servername, $username,$password,$db);

$id = $_POST['id'];
$password = $_POST['password'];

// DB 정보 가져오기 
$sql = "SELECT * FROM MEMBER WHERE ID ='{$id}'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
$hashedPassword = $row['PASSWORD'];
$row['ID'];

foreach($row as $key => $r){
    echo "{$key} : {$r} <br>";
}
// echo $row['id'];
// DB >> 비밀번호 검증 로직
$passwordResult = password_verify($password, $hashedPassword);
if ($passwordResult === true) {
    // 로그인 성공
    // 세션에 id 저장
    session_start();
    $_SESSION['ID'] = $row['id'];
    print_r($_SESSION);
    echo $_SESSION['ID'];
    
?>
    <script>
        alert("로그인에 성공하였습니다.")
        location.href = "index.php";
    </script>
<?php
} else {
    // 로그인 실패 
?>
    <script>
        alert("로그인에 실패하였습니다");
    </script>
<?php
}
?>