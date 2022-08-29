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
    <link rel="stylesheet" type="text/css" href="../css/stely_member.css">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>정보수정</title>
    
</head>
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
                            <h2>정보수정</h2>
                        </div>
                        <?php include "../lib/header_form.php" ?>
                    </div>
                </header>
                
                <!-- 로그인 되어 있는 회원의 정보를 읽어오는 php 코드 작성 -->
                <?php

           
                        // mysqli_close($conn);
                        if(!$userId){
                            echo "
                            <script>
                                alert($userId);
                                alert('비회원입니다.로그인하여주세요');
                                window.location.href='../login/login_form.php';
                            </script>
                            ";
                            exit;

                        }
                        include "../lib/dbconn.php";
                        //로그인 되어있는 회원의 정보를 읽어오는 쿼리문 
                        $sql="SELECT * FROM member WHERE userId='$userId'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);//연관배열 = [이름명]

                        $userPassword = $row['userPassword'];
                        $userName = $row['userName'];
                        $tel = $row['tel'];
                        $birth = $row['birth'];
                        $email = $row['email'];
                        // $time = date('Y-m-d(H:i:s)', $time);
                        // echo        "                     
                        // <script>
                        // alert('$userName + $userName + $tel');

                        // </script>"
                    ?>  
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
                                    <h4>singn up</h4>
                                    <div class="formBox">
                                        <!-- DB의 member테이블에 저장하는 member_modify.php에 입력값들 전달하도록 -->
                                        <form action="./member_modify.php?id=<?=$userId?>" method="post" name="member_form">
                                            <!-- 각 줄마다 라벨, 인풋요소 영역으로 나누어 지므로 col1, col2 클래스지정으로 스타일링 -->
                                            <div class="form_id">
                                                <div>
                                                <div class="col1">아이디</div>
                                                <div class="col2"><?= $userId ?></div>
                                                </div>
                                            </div>
                                            <div class="form">
                                                <div class="col1">비밀번호</div>
                                                <div class="col2"><input type="password" id= "userPassword" name="userPassword" minlength="8" maxlength="20" placeholder="숫자+영대문자+영소문자+특수문자 포함(8자리이상)"></div>
                                            </div>
                                            <div class="form">
                                                <div class="col1">비밀번호 확인</div>
                                                <div class="col2"><input type="password" id= "pass_confirm" name="pass_confirm" minlength="8" maxlength="20" placeholder="동일한 비밀번호 다시입력해주세요"></div>
                                            </div>
                                            <div class="form">
                                                <div class="col1">이름</div>
                                                <div class="col2"><input type="text" id= "userName" name="userName"  value="<?=$userName?>"></div>
                                            </div>
                                            <div class="form">
                                                <div class="col1">휴대전화</div>
                                                <div class="col2">
                                                    <!-- <input type="text" id=tel name="tel" minlength="11"  maxlength="11" placeholder="'-'를 제외한 휴대전화 11자리 "> -->
                                                    <input type="text" onKeyup="this.value=this.value.replace(/[^0-9]/g,'');" name="tel" maxlength="11"  value="<?=$tel?>">
                                                </div>
                                            </div>
                                            <div class="form">
                                                <div class="col1">생년월일</div>
                                                
                                                <div class="col2"><input type="text" id="birth" name="birth" minlength="8" maxlength="8"  value="<?=$birth?>"></div>
                                                
                                            </div>
                                            <div class="form">
                                                <div class="col1">이메일</div>
                                                <div class="col2"><input type="text" id= "email" name="email" value="<?=$email?>"></div>
                                            </div>
                                            <!-- input요소의 submit, reset으로 만들면 이미지로 못 만듬 -->
                                            <!-- input요소의 타입 중 image 타입으로 하면 이미지 버튼이면서 submit 기능 -->
                                            <!-- 값을 전송할 때 값이 비어있는지 검증하는 작업도 하고 싶어서.. -->
                                            <!-- Javascript를 이용해서 submit()해보기 -->
                                            <div class="bottom_line">
                                                <div class="imgBtns">
                                                    <div>
                                                        <img class="submitIcon" src="https://i.ibb.co/mCcp0Wg/submit-wi.png" onclick="submitForm()" alt="완료버튼">
                                                        <span>완료</span>
                                                    </div>
                                                    <div>
                                                        <img class="resetIcon" src="https://i.ibb.co/QccthCz/reset-wi.png" onclick="resetForm()" alt="초기화버튼">
                                                        <span>초기화</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>  
                                </article>
                    </section>
                    <footer class="footer">
                        <?php include "../lib/footer.php" ?>
                    </footer>

                <div>
            </div>
        </div>
    </div>
</body>
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

        function submitForm(){
        
        
            // 비밀번호와 비밀번호 확인 칸의 입력값이 같은지 비교
            if(document.member_form.userPassword.value != document.member_form.pass_confirm.value){
                alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요.");
                document.member_form.userPassword.focus();
                // 커서가 이동하고 그곳에 써있는 글씨가 선택되어 있음.
                document.member_form.userPassword.select();
                return;
            }

            // form요소를 직접 submit하는 메소드
            document.member_modify.submit(); //겟 엘리먼트 안하고 폼, 인풋을 name속성이 document 배열로 찾을 수 있음.
            }

            // 초기화 버튼 이미지 클릭시
            function resetForm(){
            document.member_form.userId.value="";
            document.member_form.userPassword.value="";
            document.member_form.pass_confirm.value="";
            document.member_form.userName.value="";
            document.member_form.tel.value="";
            document.member_form.birth.value="";
            document.member_form.email.value="";

            // 첫번째 입력 요소로 이동
            document.member_form.userId.focus();
        }

    </script>
</html>