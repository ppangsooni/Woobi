<?php
$servername = "localhost";
$username = "root";
$password ="hye0";
$db = "movie";

$conn = new mysqli($servername, $username,$password,$db);

$id = $_POST['id'];
$password = $_POST['password'];

// DB ���� �������� 
$sql = "SELECT * FROM MEMBER WHERE ID ='{$id}'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
$hashedPassword = $row['PASSWORD'];
$row['ID'];

foreach($row as $key => $r){
    echo "{$key} : {$r} <br>";
}
// echo $row['id'];
// DB >> ��й�ȣ ���� ����
$passwordResult = password_verify($password, $hashedPassword);
if ($passwordResult === true) {
    // �α��� ����
    // ���ǿ� id ����
    session_start();
    $_SESSION['ID'] = $row['id'];
    print_r($_SESSION);
    echo $_SESSION['ID'];
    
?>
    <script>
        alert("�α��ο� �����Ͽ����ϴ�.")
        location.href = "index.php";
    </script>
<?php
} else {
    // �α��� ���� 
?>
    <script>
        alert("�α��ο� �����Ͽ����ϴ�");
    </script>
<?php
}
?>