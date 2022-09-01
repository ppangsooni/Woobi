
<?php
    include("../lib/dbconn.php");
    $no = $_GET['potopaly_number'];

    $sql = "
    SELECT *
    FROM potopaly_board
    WHERE potopaly_number = '$potopaly_number'";


    $result = $mysqlboardresult = mysqli_query( $conn, $mysqlboard );
    
    // $row = mysqli_fetch_array( $mysqlboardresult );

?>



<a href="">
<?php while($row = mysqli_fetch_assoc($result)){ ?>
    <div class="potoplay_listWrap">
    
        <div class="potoplay_listImgWrap">
            
            <img class="potopalay_listImg" src="<?php echo $row['image'];?>" >
        </div>
        <div class="potoplay_listTitleWrap">
            <p><?php echo $row['potopaly_number'];?></p>
        <p class="">title:<?php echo $row['potopaly_title'];?></p>
        </div>
        <div class="potoplay_listTextWrap">
            <div class="potoplay_listText">
                
                <p><img src="https://i.ibb.co/Sfw1Kty/likeA.png" alt="좋아요"><?php echo $row['potppaly_like'];?></p>
                <p><span>작성자:<?php echo $row['userId'];?> </span>|<span>작성일<?php echo  $row['potopaly_date'];?><</span></p>
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
<?php } ?>