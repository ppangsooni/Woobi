        
<?php
    include("../lib/dbconn.php");
    $no = $_GET['potoplay_number'];

    $sql = "
    SELECT *
    FROM potoplay_board
    WHERE potoplay_number = '$no'";
    $result = mysqli_query( $conn, $sql );

?>
<?php while($row = mysqli_fetch_assoc($result)){ ?>

    <div class="potoplay_listWrap">
        <div class="potoplay_view_listTitleWrap">
            <p>no.<?php echo $row['potoplay_number'];?></p>
        <p class=""><?php echo $row['potoplay_title'];?></p>
        </div> 
        <div class="potopalay_view_listImgWrap">
            <img class="potopalay_view_listImg" src="<?php echo $row['image'];?>" >
        </div>

        <p><span><?php echo $row['userId'];?> </span>  |  <span><?php echo  $row['potoplay_date'];?></span></p>
        <p><?php echo $row['potoplay_content'];?></p>
        <div class="potoplay_view_listLikeWrap">
            <div class="potoplay_view_listikeBtn">
                <?php echo $row['potoplay_like'];?>
                <img class="potoplay_listLikeBtn_Ch" src="https://i.ibb.co/TBnPDxS/likeB-1.png"  >
                <img class="potoplay_listLikeBtn_ChHover" src="https://i.ibb.co/zxtKQdk/likeBH-1.png"  >
            </div>
        </div> 
        <a href='./potoplay_userlist_modify_form.php?potoplay_number=<?php echo $no?>' class='correction'><div>수정</div></a>     
        <a href='./potoplay_userlist_delete.php?potoplay_number=<?php echo $no?>' class='deleteBtn'><div>삭제</div></a>      
    </div>

<?php } ?>