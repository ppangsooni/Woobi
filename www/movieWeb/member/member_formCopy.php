<?php
    function php_func(){
    $userId= $_GET['userId'];

    // 값을 전달하지 않을 수도 있으니
    if(!$userId){
        echo "<script>
        function popupClose() {
            alert('아이디를 입력해주세요');
        }</script>;";
        exit;
    }

    // 데이터베이스 접속 공통모듈 사용
    include "../lib/dbconn.php";

    // 전달받은 id가 member테이블에 있는지 검사
    $sql= "SELECT * FROM member WHERE userId='$userId'";
    $result= mysqli_query($conn, $sql);
    $rowNum=mysqli_num_rows($result);

    // $rowNum이 0이 아니면 중복
    if($rowNum){
        echo "아이디가 중복 됩니다.";
        echo "다른 아이디를 사용하세요.";
    }else{
        echo "사용가능한 아이디 입니다.";
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stely_form.css">
    <link rel="stylesheet" type="text/css" href="../css/stely_member.css">
    <!--sweetalert2(alert 창 )-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.26/dist/sweetalert2.min.css" integrity="sha256-KVbvREKpOwFT7izITgnL7DtwEM1JF8bQVdBII5no7Ks=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.26/dist/sweetalert2.min.js" integrity="sha256-BM3Izbkf7noln7sbkBgjmouxAgdb6FK3lDUPpBtnTyE=" crossorigin="anonymous"></script>
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
                                        <!-- DB의 member테이블에 저장하는 member_insert.php에 입력값들 전달하도록 -->
                                        <form action="./member_insert.php" method="post" name="member_form">
                                            <!-- 각 줄마다 라벨, 인풋요소 영역으로 나누어 지므로 col1, col2 클래스지정으로 스타일링 -->
                                            <div class="form">
                                                <div class="col1">아이디</div>
                                                <div class="col2"><input type="text" id= "userId" name="userId" minlength="4" maxlength="20" placeholder="숫자와 영문만 입력(4~20자리)해주세요"></div>
                                                <!-- id줄만 존재하는 칸 -->
                                                <div class="col3" onclick="checkId()">
                                                <img class="idckIcon_ok" src="https://i.ibb.co/T2BcZWW/chk.png" alt="idCheck_ok">
                                                <img class="idckIcon_no" src="https://i.ibb.co/zmnt4gS/x.png" alt="idCheck_no">
                                                Id 중복체크

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
                                                <div><img class="submitIcon" src="https://i.ibb.co/XZDYmTh/submit.png" onclick="submitForm()" alt="완료버튼">완료</div>
                                                <div><img class="resetIcon" src="https://i.ibb.co/dB09Hfy/close.png" onclick="resetForm()" alt="초기화버튼">초기화</div>
                                            </div>
                                        </form>
                                    </div>
                                </article>
                        
                                <!-- 2. main_bottom -->
                                <article class="pop_section_main_bottom">
                                    <h4>main_bottom</h4>
                                    <div>

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
    <!-- 내부 자바스크립트 작성 -->
    <!-- 빠른 정보처리(아이디체크및정보)를 위해 내부 자바스크립트로 작성 -->
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
        
            // 입력값 중에 비어있으면 안되는 것들이 있음.

            // id
            if(!document.member_formCh.userId.value){
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
            open("./check_idCopy.php?userId="+userId, "아이디체크", "width=300, height=100, left=200, top=100");
        }
        // function checkId(){
        //     // 사용자가 입력한 id값 얻어오기
        //     let userId= document.member_form.userId.value;
            
        //     let filter = "win16|win32|win64|mac|macintel";
        //         if(0 > filter.indexOf(navigator.platform.toLowerCase())){
        //             console.log("Client platform : Mobile");
    
        //         }else{
        //             console.log("Client platform : PC");
        //             open("./check_id.php?userId="+userId, "아이디체크", "width=300, height=100, left=200, top=100");
        //         }
        // }


    </script>
</body>
    
</html>