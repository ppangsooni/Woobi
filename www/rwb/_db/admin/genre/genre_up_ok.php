<?php
  include_once $_SERVER["DOCUMENT_ROOT"]."/rwb/_lib/_con.php";
  include_once $_SERVER["DOCUMENT_ROOT"]."/rwb/_lib/lib.php";

  $genreName = $_POST["genreName"];

  //�ߺ�üũ
  $sql = "SELECT count(name) as cnt FROM Genre WHERE name = '$genreName'";

  $res = $conn1->query($sql);
  $row = $res->fetch_assoc();
  if($row["cnt"]) {
    errHandler('index.php', '������ �ߺ�');
    exit();
  }

  //�Է�
  $sql = "INSERT INTO Genre (name) VALUES ('$genreName')";

  if ($conn1->query($sql) === TRUE) {
    gotoUrl('index.php');
  } else {
    errHandler('index.php', $conn1->error);
  }
?>