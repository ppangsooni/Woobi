<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BaAB의 가족이 되어보세요">
    <link rel="stylesheet" type="text/css" href="../css/stely_form.css">
    <link rel="stylesheet" type="text/css" href="../css/stely_potoplay.css">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>내 포토플레이</title>
    
</head>
<body> 
    <div class="bg">
        <!---------------background_scroll(bgScroll.php------------------------------------------------>
        <?php include "../lib/bgScroll.php"?>
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
                        <h2>포토플레이 자랑하기</h2>
                        
                    </div>
                        <?php include "../lib/header_form.php" ?>
                    </div>
                    <a href="./potoplay_write_form.php">
                        <div class="potoplay_writeBtn">
                            <span>포토플레이<br>제작하기</span>
                        </div>
                    </a>
                </header>
                    <section class="pop_section3">
                    <!-------- 메인 이미지 영역 ------>
                        <!--  로고영역 생략 -->
                        <!-- <div class="pop_section_logo">
                            <div>
                                <img src="https://i.ibb.co/swHGtC0/logo1.png" alt="BaAB">
                            </div>
                        </div>     -->
                        <!-- 로고 아래 본문영역 -->
                        <div class="pop_section3Wrap">
                            <!-- 1. main_Top -->
                            <article class="pop_section_main_Top">
                                <div class="pop_section_main_centerList">
                                    <?php include "./potoplay_userlist.php" ?>
                                </div>  
                            </article>
                    </section>
                    <!---------------menu(nav)------------------------------------------------>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="../js/script_member.js"></script> -->
    <!-- 내부 자바스크립트 작성
    <!- 빠른 정보처리(아이디체크및정보)를 위해 내부 자바스크립트로 작성 -->
    <script>

        // window.onload : 브라우저 로드 완료 상태를 나타냅니다
        // document.getElementById : 특정 객체 태그 아이디를 지정합니다 
        // scrollTop : 특정 태그 스크롤 위치를 지정합니다        



        /* [html 최초 로드 및 이벤트 상시 대기 실시] */
        window.onload = function() {
            console.log("");
            console.log("[window onload] : [start]");
            console.log("");
        };



        /* [top 스크롤 이벤트 함수 정의] */
        function top_scroll_move(){
            console.log("");
            console.log("[top_scroll_move] : [start]");
            console.log("");

            // 스크롤을 이동할 레이아웃 아이디 지정
            let screen = document.querySelector(".screen");

            // [맨 상단으로 스크롤 이동 실시]
            screen.scrollTop = 0;
        };



        /* [bottom 스크롤 이벤트 함수 정의] */
        function bottom_scroll_move(){
            console.log("");
            console.log("[bottom_scroll_move] : [start]");
            console.log("");

            // 스크롤을 이동할 레이아웃 아이디 지정
            let screen = document.querySelector(".screen");

            // [맨 하단으로 스크롤 이동 실시]
            screen.scrollTop = screen.scrollHeight;
        };
        //--------------------footer------------------------------
        // footer영역 버튼
        let footerBtn = document.querySelector('.footerBtn'),
            footerBtn_Ch = document.querySelector('.footerBtn_Ch'),
            footerSlide = document.querySelector('.footer_center');

            footerBtn.addEventListener('click', function() {   
            if (footerSlide.style.display == 'none') {
                footerSlide.style.display = 'block';        
            } else {
                footerSlide.style.display = 'none';     
            } 
        });

    </script>
</body>
    
</html>