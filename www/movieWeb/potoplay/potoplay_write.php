
<?php 
    include("../lib/dbconn.php");

    $userId = $_SESSION['userId'];
        if (!$userId) {
            echo "로그인을 해주세요";
        }
    $sql = "
    SELECT *
    FROM member
    WHERE userId = '$userId'";

    $result = mysqli_query( $conn, $sql );
     
?>
    <div class="potoplay_listWrap">
        <form class="potoplay_listWrap_form" name="reqform" method="post" action="potoplay_write_ok.php" enctype="multipart/form-data"> 
                <div class="potoplay_write_listTitleWrap">
                    <input type="text" name="potoplay_write_title" class="potoplay_write_title" id="potoplay_write_title" placeholder="제목을 입력하세요">
                </div>
                <div class="potoplay_write_listImgWrap">
                    <input type="file" id="potoplay_write_files" name="image"/>
                    <img class="potoplay_write_image"id="potoplay_write_image" />
                </div>
                <div class="potoplay_write_listTextWrap">
                    <div>
                    <span>작성자 :</span>
                    <input type="text" name="userId" placeholder="<?php echo $_SESSION['userId'];?> ">
                    </div>
                    <textarea name="text" cols=75 rows=15></textarea>
                </div>
                <input type="submit" value="작성">
            </form>                              
    </div>
 
