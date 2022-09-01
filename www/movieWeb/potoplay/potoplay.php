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
    <meta name="description" content="BaAB의 가족이 되어보세요">
    <link rel="stylesheet" type="text/css" href="../css/stely_form.css">
    <link rel="stylesheet" type="text/css" href="../css/stely_potoplay.css">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>포토플레이</title>
    
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
                            <h2>포토플레이</h2>
                        </div>
                        <?php include "../lib/headerPotoplay_form.php" ?>
                    </div>
                </header>
                    <section class="pop_section">
                        <!-------- 메인 이미지 영역 ------>
                            <!--  로고영역 생략 -->
                            <!-- <div class="pop_section_logo">
                                <div>
                                    <img src="https://i.ibb.co/swHGtC0/logo1.png" alt="BaAB">
                                </div>
                            </div>     -->
                            <!-- 로고 아래 본문영역 -->
                            <div class="pop_section_mainList">
                                <!-- 1. main_Top -->
                                <article class="pop_section_main_top">
                                   <div class="pop_section_main_topText">
                                        <h3>지금 바로,<br>영화 예매하고 포토플레이!</h3>
                                        <a href=""><p>포토플레이?</p></a>
                                   </div>                                    
                                    <div class="pop_section_main_topList">
                                    <?php include "../movielist/screening_movie.php" ?>
                                    </div>  
                                </article>
                                <article class="pop_section_main_center">
                                    <div class="pop_section_main_header">
                                    <h4>내 포토플레이</h4>
                                        <a href="./potoplay_userlist_form.php"><p>전체보기</p></a>
                                    </div>
                                    <div class="pop_section_main_centerList">
                                    <?php include "./potoplay_userlist.php" ?>
                                    </div>  
                                </article>
                                      
                                    <!-- include "../lib/dbconn.php";
                                    //로그인 되어있는 회원의 정보를 읽어오는 쿼리문 
                                    $sql="SELECT * FROM movie.potoplay order by potoplay_number desc";
                                    $result = $connect->query($query);
                                    $total = mysqli_num_rows($result); -->
                                <!-- 2. main_bottom -->
                                <article class="pop_section_main_bottom">
                                    <div class="pop_section_main_header">
                                    <h4>포토플레이 자랑하기</h4>
                                    <a href="./potoplay_userlist_form.php"><div>내 포토플레이 자랑</div></a>
                                        <div>
                                            <ul>
                                                <li>최신</li>&VerticalSeparator;
                                                <li>주간</li>&VerticalSeparator;
                                                <li>월간</li>&VerticalSeparator;
                                            </ul>
                                        </div>

                                    </div>

                                    <div>
                                        <table>


                                        </table>
                                    </div>
                                </article>
                            </div>                                      
                        </div>
                    </section>
                    <footer class="footer">
                        <?php include "../lib/footer.php" ?>
                    </footer>
                    <!---------------menu(nav)------------------------------------------------>
                <div>
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