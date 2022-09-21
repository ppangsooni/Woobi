
<?php
    include("../lib/dbconn.php");
    $mysqlboard = "SELECT * FROM potoplay_board order by potoplay_number desc";
    
    $result = $mysqlboardresult = mysqli_query( $conn, $mysqlboard );
    
    // $row = mysqli_fetch_array( $mysqlboardresult );
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
    
        $sql = "select count(*) as cnt from potoplay_board";
        $result = $conn->query($sql);
         $totalCount = $result->fetch_assoc()['cnt'];
    ?>



<?php
    if ($totalCount == 0) {
      echo "데이터가 없습니다.";
    } else {
      $rowPerPage = 2;
      $blockSet = 2;
      $link = "";

      $sql = "select * from potoplay_board order by potoplay_number desc limit ".$start.", ".$rowPerPage;
    //   die($sql);
      $result = $conn->query($sql);
       // while($rows = $result->fetch_assoc()) 
       while($row = mysqli_fetch_assoc($result)){ ?>
        <a href="potoplay_list_view_form.php?potoplay_number=<?php echo $row['potoplay_number']?>">
        
            <div class="potoplay_listWrap">
            
                <div class="potoplay_listImgWrap">
                     
                    <img class="potoplay_listImg" src="<?php echo $row['image'];?>" >
                </div>
                <div class="potoplay_listTitleWrap">
                    <p><?php echo $row['potoplay_number'];?></p>
                    <p class="">title:<?php echo $row['potoplay_title'];?></p>
                </div>
                <div class="potoplay_listTextWrap">
                    <div class="potoplay_listText">
                        
                        <p><img src="https://i.ibb.co/Sfw1Kty/likeA.png" alt="좋아요"><?php echo $row['potoplay_like'];?></p>
                        <p><span><?php echo $row['userId'];?> </span><br><span><?php echo  $row['potoplay_date'];?><</span></p>
                    </div>
        
                    <div class="potoplay_listLike">
                        <div class="potoplay_listLikeBtn">
                            <img class="potoplay_listLikeBtn_Ch" src="https://i.ibb.co/TBnPDxS/likeB-1.png"  alt="좋아요 버튼">
                            <img class="potoplay_listLikeBtn_ChHover" src="https://i.ibb.co/zxtKQdk/likeBH-1.png"  alt="좋아요 버튼">
                        </div>
                    </div>
                </div>
            </div>
        </a>
        
        <?php }}
        ?>
        <div>
        <?php
        page($start, $totalCount, $rowPerPage, $blockSet, "처음", "이전", "다음", "마지막");?>
        </div>
       