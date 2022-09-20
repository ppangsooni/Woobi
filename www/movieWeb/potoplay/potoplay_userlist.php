
<?php 
    include("../lib/dbconn.php");
    $userId = $_SESSION['userId'];
        if (!$userId) {
            echo "로그인을 하여주세요";
        }
    
    $sql = "
    SELECT *
    FROM potoplay_board
    WHERE userId = '$userId'";

    $result = $mysqlboardresult = mysqli_query( $conn, $sql );
    
    // $row = mysqli_fetch_array( $mysqlboardresult );
     
     while($row = mysqli_fetch_assoc($result)){ ?>
     <a href="potoplay_list_view_form.php?potoplay_number=<?php echo $row['potoplay_number']?>">
    <div class="potoplay_listWrap">
        <div class="potoplay_listImgWrap" >
            <?php echo "<img src='$row[image]'>";?>

        </div>
        <div class="potoplay_listTitleWrap">
            <p><?php echo $row['potoplay_number'];?></p>
        <p class="">title:<?php echo $row['potoplay_title'];?></p>
        </div>
        <div class="potoplay_listTextWrap">
            <div class="potoplay_listText">
                <p><img src="https://i.ibb.co/Sfw1Kty/likeA.png" alt="?????"><?php echo $row['potoplay_like'];?></p>
                <p><span><?php echo $row['userId'];?> </span>|<span><?php echo  $row['potoplay_date'];?></span></p>
            </div>
            <div class="potoplay_listLike">
                <div class="potoplay_listLikeBtn">
                    <img class="potoplay_listLikeBtn_Ch" src="https://i.ibb.co/TBnPDxS/likeB-1.png"  alt="?????">
                    <img class="potoplay_listLikeBtn_ChHover" src="https://i.ibb.co/zxtKQdk/likeBH-1.png"  alt="?????">
                </div>
            </div>
        </div>
    </div>
</a>
<?php } ?>

