<?php
  $servername = "localhost"; //ȣ��Ʈ
  $username = ""; //����
  $password = ""; //password
  $db = ""; //DB

  //mysqli ��ü
  $conn1 = new mysqli($servername, $username, $password, $db);
  if ($conn1->connect_error) {
    die("conn1 Connection failed: " . $conn1->connect_error);
  }

  //mysqli ����
  $conn2 = mysqli_connect($servername, $username, $password, $db);
  if (!$conn2) {
    die("conn2 Connection failed: " . mysqli_connect_error());
  }

  //PDO ��ü
  try {
    $conn3 = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn3->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "conn3 Connection failed: " . $e->getMessage();
  }
?>