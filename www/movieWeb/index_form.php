<?php 
    //로그인을 하면 session에 정보를 저장하고 각 페이지들에서 모두 사용하고자 함.
    //로그인에 띠라 화면구성이 다르기에 세션에 저장되어 있는 회원정보 중 id, name, level 값 읽어오기
    session_start(); //세션을 저장하든 읽어오든 사용하고자 하면 이 함수로 시작
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="EUC-KR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/stely_form.css">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>popup form</title>
</head>
    <div class="bg">
        <!---------------background_scroll(bgScroll.php------------------------------------------------>
        <?php include "../lib/bgScroll.php" ?>
        <div class="bg_macbook">
            <img src="https://i.ibb.co/PYr4rTt/ipd1.png">
            <div class="screen">
                <div class="wrap">
                    <header class="pop_header">
                        <div class="pop_header_wrap">
                            <div class="pop_header_title">
                                <a class="pop_header_back" href="back();">
                                    <img src="https://i.ibb.co/dB2ztsX/back.png" alt="back">
                                </a>
                                <h2>:title Name</h2>
                            </div>
                            <?php include "../movieWeb/lib/header_form.php" ?>
                            <!-- php include "../lib/header_form.php" -->
                        </div>
                    </header>
                    <section class="pop_section">
                            <?php include "../movieWeb/main.php" ?>
                        
                    </section>
                    <footer class="footer">
                        <?php include "../movieWeb/lib/footer.php" ?>
                    </footer>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="./js/script_index_form.js"></script>
</html>