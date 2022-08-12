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
    <link rel="stylesheet" type="text/css" href="../css/stely_form.css">
    <link rel="stylesheet" type="text/css" href="../css/stely_login.css">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>login</title>
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
                                <h2>로그인</h2>
                            </div>
                            <?php include "../lib/header_form.php" ?>
                            <!-- php include "../lib/header_form.php" -->
                        </div>
                    </header>
                    <section class="pop_section">
                        <!-------- 메인 이미지 영역 ------>
                        <!--  로고영역 -->
                        <div class="pop_section_logo">
                            <div>
                                <img src="https://i.ibb.co/swHGtC0/logo1.png" alt="BaAB">
                            </div>
                        </div>    
                        <!-- 로고 아래 본문영역 -->
                        <div class="pop_section_main">
                            <!-- 1. main_Top -->
                            <article class="pop_section_main_Top">
                                    <h4></h4>
                                    <div class="formBox">
                                        <!-- DB의 member테이블에 저장하는 member_insert.php에 입력값들 전달하도록 -->
                                        <form action="./login.php" method="post" name="login">
                                            <!-- 각 줄마다 라벨, 인풋요소 영역으로 나누어 지므로 col1, col2 클래스지정으로 스타일링 -->
                                            <div class="form">
                                                
                                                <div class="col1">아이디</div>
                                                <div class="col2"><input type="text" id= "userId" name="userId" placeholder="숫자와 영문만 입력(4~20자리)해주세요"></div>
                                                
                                            </div>
                                            <div class="form">
                                                <div class="col1">비밀번호</div>
                                                <div class="col2"><input type="password" id= "userPassword" name="userPassword"placeholder="숫자+영대문자+영소문자+특수문자 포함(8자리이상)"></div>
                                            </div>
                                            <div class="bottom_line">
                                                <div class="textBtns">
                                                    <button class="loginBtn" type="submit" onclick="loginBtn()" >
                                                        <span>로그인</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>  
                                </article>
                                <!-- 2. main_bottom -->
                                <article class="pop_section_main_bottom">
                                    <!-- <h4>main_bottom</h4> -->
                                    <div>
                                        <div class="formBtnType">
                                            <div class="formBtnTypeCh1"><img src="https://i.ibb.co/3mcScVf/image.png" alt="naverIcon"></div>
                                            <div class="formBtnTypeCh2">네이버 간편로그인</div>
                                        </div>
                                        <div class="formBtnType">
                                            <div class="formBtnTypeCh1"><img src="https://i.ibb.co/BL1RghR/image.png" alt="kakaoIcon"></div>
                                            <div class="formBtnTypeCh2">카카오 간편로그인</div>
                                        </div>
                                        <div class="formBtnType">
                                            <div class="formBtnTypeCh1"><img src="https://i.ibb.co/9Ydn27t/apple.png" alt="appleIcom"></div>
                                            <div class="formBtnTypeCh2"> 간편로그인</div>
                                        </div>
                                    </div>
                                </article>
                            </div>        
                        </div>

                    </section>
                    <footer class="footer">
                        <?php include "../lib/footer.php" ?>
                    </footer>

                <div>
            </div>

        </div>

    </div>
</body>
<script src="../js/script_index_form.js"></script>
</html>