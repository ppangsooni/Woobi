<?php 
    //占싸깍옙占쏙옙占쏙옙 占싹몌옙 session占쏙옙 占쏙옙占쏙옙占쏙옙 占쏙옙占쏙옙占싹곤옙 占쏙옙 占쏙옙占쏙옙占쏙옙占썽에占쏙옙 占쏙옙占? 占쏙옙占쏙옙構占쏙옙占? 占쏙옙.
    //占싸깍옙占싸울옙 占쏙옙占? 화占썽구占쏙옙占쏙옙 占쌕몌옙占썩에 占쏙옙占실울옙 占쏙옙占쏙옙퓸占? 占쌍댐옙 회占쏙옙占쏙옙占쏙옙 占쏙옙 id, name, level 占쏙옙 占싻억옙占쏙옙占?
    session_start(); //占쏙옙占쏙옙占쏙옙 占쏙옙占쏙옙占싹듸옙 占싻억옙占쏙옙占? 占쏙옙占쏙옙構占쏙옙占? 占싹몌옙 占쏙옙 占쌉쇽옙占쏙옙 占쏙옙占쏙옙
 

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="EUC-KR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/stely_index.css">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>BAAB::CINEMA</title>
</head>
<body>

    <div class="bg">
        <div class="bgImg">
            <div class="bgImg_scroll">
                <div>
                    <div class="bgImg_scroll_t"></div>               
                </div>
                <div class="bgImg_scroll_m"></div>
                <div>
                    <div class="bgImg_scroll_b"></div>
                </div>
            </div>
        </div>
        <div class="bg_macbook">
            <img src="https://i.ibb.co/PYr4rTt/ipd1.png">
            <div class="screen">
                <div class="wrap">
                    <!---------------header------------------------------------------------>
                    <header class="header">
                        <!-----header _ 영역--------------------->
                        <div class="header_top">
                            <div class="header_top_left">
                                <a href="#">
                                    <img class="header_top_left_logo" src="https://i.ibb.co/swHGtC0/logo1.png" alt="BAaB logo">
                                    <img class="header_top_left_logotext" src="https://i.ibb.co/Y07w6Zr/logo-Text1.png" alt="BAaB">
                                </a>
                            </div>
                            <div class="header_top_right">
                                <a href="#"><img class="header_top_right_ticketing" src="https://i.ibb.co/54y0G5P/ticketing1.png" alt="ticketing1"></a>
                                <a href="#"><img class="header_top_left_cart" src="https://i.ibb.co/dDhFG6f/popcon1.png" alt="cart"></a>
                                <a href="#"><img class="menuBtn" src="https://i.ibb.co/PNB8tQt/menu.png" alt="menu"></a>
                            </div>
                        </div>
                        <!-----header 서브메뉴 영역--------------------->
                        <div class="header_submenu">
                            <ul class="header_submenu_list">
                                <li><a href="#">홈</a></li>
                                <li><a href="#">이벤트</a></li>
                                <li><a href="#">무비톡</a></li>
                                <li><a href="#">패스트오더</a></li>
                                <li><a href="#">@BaAB</a></li>
                            </ul>
                        </div>
                    </header>
                    <!---------------menu(nav)------------------------------------------------>
                    <nav class="menuSlide">
                        <div class="menuPage">
                            <!-----menu(nav) 메인메뉴_헤더&로그인 영역--------------------->
                            <header class="menuHeader">
                                <?php include "../movieWeb/lib/header_menu.php"?>
                            </header>
                            <section class="menuSection">
                                <div class="menuSection_un"></div>
                            <!-----menu(nav) 메인메뉴_바로가기메뉴 영역--------------------->
                                <div class="menuSection_top">
                                    <div class="menuS_t_quickList">
                                        <a class="menuPage_ticketBymovie" href="">
                                            <div>
                                                <img src="https://cdn-icons-png.flaticon.com/128/4221/4221837.png" alt="영화별예매 메뉴">
                                                영화별예매
                                            </div>
                                        </a>
                                        <a class="menuPage_ticketBymovie" href="">
                                            <div>
                                                <img src="https://cdn-icons-png.flaticon.com/128/4812/4812734.png" alt="극장별예매 메뉴">
                                                극장별예매
                                            </div>
                                        </a>
                                        <a class="menuPage_ticketBymovie" href="">
                                            <div>
                                                <img src="https://i.ibb.co/dDhFG6f/popcon1.png" alt="패스트오더 메뉴">
                                                패스트오더
                                            </div>
                                        </a>
                                        <a class="menuPage_ticketBymovie" href="">
                                            <div>
                                                <img src="https://cdn-icons-png.flaticon.com/128/2548/2548374.png" alt="포토릴레이 메뉴">
                                                포토릴레이
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-----menu(nav) 메인메뉴_메인메뉴 영역--------------------->
                                <div class="menuSection_center">
                                    <div>
                                        <ul>
                                            <div>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png alt="통합검색 바로가기"><span>통합검색</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png alt="영화관찾기 바로가기"><span>영화관찾기</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png alt="이벤트 바로가기"><span>이벤트</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png alt="기프티샵 바로가기"><span>기프티샵</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png alt="VIP라운지 바로가기"><span>VIP라운지</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png alt="단체/대관문의 바로가기"><span>단체/대관 문의</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png alt="무비로그 바로가기"><span>무비로그</span></a></li>
                                            </div>
                                            <div>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png alt="영화 바로가기"><span>영화</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png alt="특별관 바로가기"><span>특별관</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png alt="할인정보 바로가기"><span>할인정보</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png alt="CGV스토어 바로가기"><span>CGV스토어</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png alt="클럽서비스 바로가기"><span>클럽서비스</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png alt="상담톡 바로가기"><span>상담톡</span></a></li>
                                                <li><a></a></li>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <!-----menu(nav) 메인메뉴_SNS바로가기 영역--------------------->
                                <div class="menuSection_bottom">
                                    <div class="menuSection_b_snsBox">
                                        <!-- 아래의 링크는 크롤링사이트인 CGV 인스타그램 연결 -->
                                        <a href="https://www.instagram.com/cgv_korea/?hl=ko" target="_blank">
                                            <img class="menuSection_b_snsicon" src="https://i.ibb.co/XX9KC0n/image.jpg"  alt="BaAB 인스타그램 바로가기">
                                            <p>인스타그램</p>
                                        </a>
                                    </div>
                                    <div class="menuSection_b_snsBox">
                                        <!-- 아래의 링크는 크롤링사이트인 CGV 카카오체널 연결 -->
                                        <a href="https://pf.kakao.com/_VXwbj" target="_blank">
                                            <img class="menuSection_b_snsicon" src="https://i.ibb.co/BL1RghR/image.png" alt="BaAB 카카오체널 바로가기">
                                            <p>카카오채널</p>
                                        </a>
                                    </div>
                                    <div class="menuSection_b_snsBox">
                                        <!-- 아래의 링크는 크롤링사이트인 CGV 페이스북 연결 -->
                                        <a href="https://ko-kr.facebook.com/CJCGV/" target="_blank">
                                            <img class="menuSection_b_snsicon" src="https://i.ibb.co/WfBmdqh/image.png" alt="BaAB 페이스북 바로가기">
                                            <p>페이스북</p>
                                        </a>
                                    </div>
                                    <div class="menuSection_b_snsBox">
                                        <!-- 아래의 링크는 크롤링사이트인 CGV 유튜브링크 연결 -->
                                        <a href="https://www.youtube.com/channel/UCmjUMtUw6wXLrsULdxuXWdg" target="_blank">
                                            <img class="menuSection_b_snsicon" src="https://i.ibb.co/xYN8FVP/image.jpg" alt="BaAB 유튜브 바로가기">
                                            <p>유튜브</p>
                                        </a>
                                    </div>
                                </div>
                                <!-----menu(nav) 메인메뉴_광고 영역--------------------->
                                <div class="menuAticle">
                                    <!-- 광고배너  -->
                                    <a>
                                        <div class="menuAticle_banner">
                                        <img src="https://img.cgv.co.kr/WebApp/contents/eventV4/35039/16595770755740.jpg">
                                        </div>
                                    </a>
                                </div>
                            </section>
                                <!-----menu(nav) 메인메뉴_footer 영역--------------------->
                            <footer class="menuFooter">
                                <div>
                                    <a href=""><span>설정</span></a>&VerticalSeparator;
                                    <a href=""><span>고객센터</span></a>
                                </div>
                                <div><a</div>
                            </footer>   
                        </div>
                    </nav>
                    <!---------------section------------------------------------------------>
                    <section class="section">
                        <div class="content" style="height: 1000px;">
                            
                        </div>
                    </section>
                    <!---------------footer------------------------------------------------>
                    <footer>
                        <?php include "../movieWeb/lib/footer.php" ?>
                    </footer>
                </div>
            </div>

        </div>

    </div>
</body>
<script src="./js/script_index.js"></script>
</html>