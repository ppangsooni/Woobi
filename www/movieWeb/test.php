<?php
  include_once $_SERVER["DOCUMENT_ROOT"]."/www/movieWeb/lib/dbconn.php";
  // include("../lib/dbconn.php");
  function page($start, $totalCount, $rowPerPage, $blockSet, $first, $pre, $next, $last) {
    echo "<a href='?start=0'>$first</a>  ";

    $page = floor ($start / ($rowPerPage * $blockSet));
    if ($totalCount > $rowPerPage) {
      if($start+1 > $rowPerPage*$blockSet) {
        $pre_start = $page * $rowPerPage * $blockSet - $rowPerPage;
        echo "<a href='?start=$pre_start'>$pre</a>";
      } else echo "$pre";
    } else echo "$pre";

    if($totalCount > 0) echo "| ";

    for ($vj=0 ; $vj<$blockSet ; $vj++) {
      $ln = ($page * $blockSet + $vj) * $rowPerPage;
      $page_num = $page * $blockSet+$vj + 1;
      if ($ln < $totalCount) {
        if($ln != $start) echo "<a href='?start=$ln'><b>$page_num</b></a> | ";
        else echo "[<b>$page_num</b>] | ";
      }
    }

    if($totalCount > (($page+1) * $rowPerPage * $blockSet)){
      $n_start = ($page+1) * $rowPerPage * $blockSet;
      echo  "<a href='?start=$n_start'>$next</a>";
    } else echo  $next;

    $end_start = floor($totalCount/$rowPerPage - 1)*$rowPerPage;
    echo "  <a href='?start=$end_start'>$last</a>";
  }

  $start = 0;
	if(isset($_GET["start"])) {
		$start = $_GET["start"];
	}

	$sql = "select count(*) as cnt from Author";
	$result = $conn1->query($sql);
  $totalCount = $result->fetch_assoc()['cnt'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="EUC-KR">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>리스트 페이징</title>
</head>
<body>
  <?php
    if ($totalCount == 0) {
      echo "데이터가 없습니다.";
    } else {
      $rowPerPage = 2;
      $blockSet = 2;
      $link = "";

      $sql = "select * from Author order by id desc limit ".$start.", ".$rowPerPage;
      $result = $conn1->query($sql);
      while($rows = $result->fetch_assoc()) {
        echo $rows["id"].":".$rows["name"]."<br>";
      }
      
    }

    page($start, $totalCount, $rowPerPage, $blockSet, "처음", "이전", "다음", "마지막");
  ?>
</body>
</html>