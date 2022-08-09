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
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>회원가입</title>
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
                            <h2>회원가입</h2>
                        </div>
                        <?php include "../lib/header_form.php" ?>
                    </div>
                </header>
                    <section class="pop_section">
                        <!--  로고영역 -->
                        <div class="pop_section_logo">
                            <div>
                                <img src="https://i.ibb.co/swHGtC0/logo1.png" alt="BaAB">
                            </div>
                        </div>
                        <div id="main_content">
                            <div id="join_box">
                                <!-- DB의 member테이블에 저장하는 member_insert.php에 입력값들 전달하도록 -->
                                <form action="./member_insert.php" method="post" name="member_form">
                                    <h2>회원 가입</h2>
                
                                    <!-- 각 줄마다 라벨, 인풋요소 영역으로 나누어 지므로 col1, col2 클래스지정으로 스타일링 -->
                                    <div class="form id">
                                        <div class="col1">아이디</div>
                                        <div class="col2"><input type="text" id= "userId" name="userId" minlength="4" maxlength="20" placeholder="숫자와 영문만 입력(4~20자리)해주세요"></div>
                                        <!-- id줄만 존재하는 칸 -->
                                        <div class="col3">
                                        <img src="https://i.ibb.co/hDCK19y/idcheck.png" onclick="checkId()">Id 중복체크
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
                                        <div class="col2"><input type="text" id= "userName" name="userName" placeholder="이름을 입력해주세요"></div>
                                    </div>
                                    <div class="form">
                                        <div class="col1">휴대전화</div>
                                        <div class="col2">
                                            <!-- <input type="text" id=tel name="tel" minlength="11"  maxlength="11" placeholder="'-'를 제외한 휴대전화 11자리 "> -->
                                            <input type="text" onKeyup="this.value=this.value.replace(/[^0-9]/g,'');" name="tel" maxlength="11" placeholder="'-'를 제외한 휴대전화 11자리 ">
                                        </div>
                                    </div>
                                    <div class="form">
                                        <div class="col1">생년월일</div>
                                        <div class="col2">
                                        <div class="col2"><input type="text" id="birth" name="birth" minlength="8" maxlength="8" placeholder="'-'를 제외한 8자리 숫자 (예 20220802) "></div>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <div class="col1">이메일</div>
                                        <div class="col2"><input type="text" id= "email" name="email" placeholder="'@'를 포함하여 입력해주세요 (as123@naver.com)"></div>
                                    </div>
                                    <!-- input요소의 submit, reset으로 만들면 이미지로 못 만듬 -->
                                    <!-- input요소의 타입 중 image 타입으로 하면 이미지 버튼이면서 submit 기능 -->
                                    <!-- 값을 전송할 때 값이 비어있는지 검증하는 작업도 하고 싶어서.. -->
                                    <!-- Javascript를 이용해서 submit()해보기 -->
                                    <div class="bottom_line"></div>
                                    <div class="buttons">
                                        <!-- <button type="submit" onclick="submitForm()"></button> -->
                                        <div><img src="https://i.ibb.co/XZDYmTh/submit.png" onclick="submitForm()" alt="완료버튼">완료</div>
                                        <div><img src="https://i.ibb.co/dB09Hfy/close.png" onclick="resetForm()" alt="초기화버튼">초기화</div>
                                    </div>
                                </form>
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
    <script src="../js/script_member.js"></script>
</body>
    
</html>