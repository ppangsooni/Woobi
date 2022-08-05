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
    <link rel="stylesheet" type="text/css" href="./css/stely_menu.css">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>회원가입</title>
</head>
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
                    <header class="pop_header">
                            <?php include "../lib/header_form.php" ?>
                    </header>
                    <section class="pop_section">
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
                    <footer class="pop_footer">
                        <?php include "../lib/footer_form.php" ?>
                    </footer>
                    <!---------------menu(nav)------------------------------------------------>
                <div>
            </div>
        </div>
    </div>
    <!-- 내부 자바스크립트 작성 -->
    <script>
        
        function submitForm(){
 
            // 입력값 중에 비어있으면 안되는 것들이 있음.

            // id
            if(!document.member_form.userId.value){
                alert("아이디를 입력하세요.");
                //커서(포커스)를 아이디 인풋요소로 이동
                document.member_form.userId.focus();
                return;
            }
            // 비밀번호
            if(!document.member_form.userPassword.value){
                alert("비밀번호를 입력하세요.");
                document.member_form.userPassword.focus();
                return;
            }
            // 비밀번호 확인
            if(!document.member_form.pass_confirm.value){
                alert("비밀번호 확인을 입력하세요.");
                document.member_form.pass_confirm.focus();
                return;
            }
            // 이름
            if(!document.member_form.userName.value){
                alert("이름을 입력하세요.");
                document.member_form.userName.focus();
                return;
            }
            // 휴대전화
            if(!document.member_form.tel.value){
                alert("휴대전화를 입력하세요.");
                document.member_form.tel.focus();
                return;
            }
            // 생년월일
            if(!document.member_form.birth.value){
                alert("생년월일을 입력하세요.");
                document.member_form.birth.focus();
                return;
            }
            // 이메일
            if(!document.member_form.email.value){
                alert("이메일을 입력하세요.");
                document.member_form.email.focus();
                return;
            }
            // 비밀번호와 비밀번호 확인 칸의 입력값이 같은지 비교
            if(document.member_form.userPassword.value != document.member_form.pass_confirm.value){
                alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요.");
                document.member_form.userPassword.focus();
                // 커서가 이동하고 그곳에 써있는 글씨가 선택되어 있음.
                document.member_form.userPassword.select();
                return;
            }

            // form요소를 직접 submit하는 메소드
            document.member_form.submit(); //겟 엘리먼트 안하고 폼, 인풋을 name속성이 document 배열로 찾을 수 있음.
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


        //아이디 중복 확인 버튼 클릭
        function checkId(){
            // 사용자가 입력한 id값 얻어오기
            let userId= document.member_form.userId.value;

            // DB에서 같은 아이디가 있는지 확인하고 결과를 보여주는 새로운 윈도우 띄우기
            open("./check_id.php?userId="+userId, "아이디체크", "width=300, height=100, left=200, top=100");

        }
    </script>
</body>
    
</html>