<?php 
    //로그인을 하면 session에 정보를 저장하고 각 페이지들에서 모두 사용하고자 함.
    //로그인에 띠라 화면구성이 다르기에 세션에 저장되어 있는 회원정보 중 id, name, level 값 읽어오기
    session_start(); //세션을 저장하든 읽어오든 사용하고자 하면 이 함수로 시작
 
    $userId="";
    $userName="";
    $grade=""; //회원등급 : 1~5등급 [1등급:관리자, 5등급:신규회원]
    $userPoint="";
 
    if( isset($_SESSION['userId'])) $userId= $_SESSION['userId'];
    if( isset($_SESSION['userName'])) $userName= $_SESSION['userName'];
    if( isset($_SESSION['grade'])) $grade= $_SESSION['grade'];
    if( isset($_SESSION['userPoint'])) $userPoint= $_SESSION['userPoint']; 
?>
<!-- 헤더 영역의 로고와 회원가입/로그인 표시 영역 -->
        <div class="menuPage_top">
            
            <!-- 1. 로고영역 -->
            <div class="menuPage_topLeft">
                <img src="https://i.ibb.co/V3Y54Rm/logo2.png" alt="BaAB">
            </div>
            <!-- 헤더 영역의 네비게이션 메뉴 영역 -->
            <div class="menuPage_topRight">
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/5525/5525279.png" alt="home">
                <img src="https://i.ibb.co/SwpVpTz/notice.png" alt="notice">
                <img class= "menuClose" src="https://i.ibb.co/dB09Hfy/close.png" alt="close">
            </div>
        </div>
        <!-- 2. 회원가입/로그인 버튼 표시 영역 -->
        <div class="menuPage_login">
            <div>
            <?php if(!$userId){ ?>
                    <li class="userKeyup"><a href="./login/login_form.php">로그인을 해주세요</a></li>
                    <li>가입하지 않으셨나요?<a href="./member/member_form.php" class="userKeyup"> 회원가입 </a></li>
                <?php }else{ ?>
                    <div class="userLogin">
                        <li>
                            <?php
                                $userId = $_SESSION['userId'];
                            echo "<span class='userKeyup'> $userId 님 </span>";
                            ?>
                        </li>
                        <li>
                            <span class='userTex'>
                                <?php
                                $grade = $_SESSION['grade'];
                                if ($grade==1) {
                                    echo "등급 : 관리자" ;
                                } 
                                if ($grade==2) {
                                    echo "등급 : B:VVIP" ;
                                }
                                if ($grade==3) {
                                    echo "등급 : B:RVIP" ;
                                }
                                if ($grade==4) {
                                    echo "등급 : B:VIP" ;
                                }
                                if ($grade==5) {
                                    echo "등급 : B:일반" ;
                                }
                                ?>
                             </span>
                             <span>
                                <?php
                                    $userPoint = $_SESSION['userPoint'];
                                    echo "point:  $userPoint" ;
                                ?>
                             </span>
                        </li>
                        <li><a href="./login/logout.php">로그아웃</a></li>
                    </div>
                <?php }?>
            </div>
            <div>
                    <a href=""> 스마트영수증 </a>&VerticalSeparator;
                    <a href=""> 기프티카드 </a>&VerticalSeparator;
                <?php if(!$userId){ ?>
                    <a href="./login/member_modify_form.php"> MY BaAB </a>
                <?php }else{ ?>
                    <a href="./login/member_modify_form.php"> MY BaAB </a>
                <?php }?>
            </div>
                

        </div>

