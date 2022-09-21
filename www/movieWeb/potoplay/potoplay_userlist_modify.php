<?php
    include("../lib/dbconn.php");
    $no = $_GET['potoplay_number'];

    $sql = "
    SELECT *
    FROM potoplay_board
    WHERE potoplay_number = '$no'";

    $result = mysqli_query( $conn, $sql );
    $row = mysqli_fetch_assoc($result);
    
?>
    <div class="potoplay_listWrap">
        <form class="potoplay_listWrap_form" name="reqform" method="post" action="potoplay_userlist_modify_ok.php?potoplay_number=<?php echo $no; ?>" enctype="multipart/form-data"> 
        <div class="potoplay_write_listTitleWrap">
                    <span>title :</span>
                    <input type="text" name="potoplay_write_title" class="potoplay_write_title" id="potoplay_write_title"  value="<?php echo $row['potoplay_title'];?>">
                </div>
                <div class="potoplay_write_listImgWrap">
                    <input type="file" id="potoplay_write_files" name="image"/>
                    <img class="potoplay_write_image"id="potoplay_write_image" src="<?php echo $row['image'];?>"/>
                </div>
                <div class="potoplay_write_listTextWrap">
                    <div>
                    <span>작성자 :</span>
                    <input type="text" name="userId"  value="<?php echo $_SESSION['userId'];?> ">
                    </div>
                    <textarea name="text" cols=75 rows=15 ><?php echo $row['potoplay_content'];?></textarea>
                </div>
                <input type="submit" value="수정하기">
                <button>삭제하기</button>
                
            </form>                              
    </div>
 

