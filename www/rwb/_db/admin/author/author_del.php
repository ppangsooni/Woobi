<?php
  include_once $_SERVER["DOCUMENT_ROOT"]."/rwb/_lib/_con.php";
  include_once $_SERVER["DOCUMENT_ROOT"]."/rwb/_lib/lib.php";

  $authorId = $_GET["authorId"];

  $sql = "DELETE FROM Author WHERE id = $authorId";

  if ($conn1->query($sql) === TRUE) {
    gotoUrl("author_up.php");
  } else {
    errHandler("author_up.php", $conn1->error);
  }
?>