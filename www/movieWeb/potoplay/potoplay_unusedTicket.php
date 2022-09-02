
<?php 
    include("../lib/dbconn.php");
    $userId = $_SESSION['userId'];
        if (!$userId) {
            echo "제작하신 포토플레이가 없습니다.<button>포토플레이 제작하기</button>";
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
            
            <img class="potoplay_listImg" src="<?php echo $row['image'];?>" >
        </div>
        <div class="potoplay_listTitleWrap">
            <p><?php echo $row['potoplay_number'];?></p>
        <p class="">title:<?php echo $row['potoplay_title'];?></p>
        </div>
        <div class="potoplay_listTextWrap">
            <div class="potoplay_listText">
                
                <p><img src="https://i.ibb.co/Sfw1Kty/likeA.png" alt="좋아요"><?php echo $row['potoplay_like'];?></p>
                <p><span>작성자:<?php echo $row['userId'];?> </span>|<span>작성일<?php echo  $row['potoplay_date'];?><</span></p>
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


