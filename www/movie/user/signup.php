<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="EUC-KR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./stelysheet_signup_php.css">
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
                    <div><img src="https://i.ibb.co/swHGtC0/logo1.png" alt="BAaB logo"></div>
                    <form method="POST" action="./signupProcess.php">
                        <div class="SignupInputBox">
                            <div class="SignupInputBoxCh">
                                <label for="SignupInput_Id">아이디</label>
                                <input name="id" type="text" class="formInput" id="SignupInput_Id" placeholder="ID 입력">
                            </div>
                            <div class="SignupInputBoxCh">
                                <label for="SignupInput_Pw">비밀번호</label>
                                <input name="password" type="password" class="formInput" id="SignupInput_Pw" placeholder="비밀번호 입력">
                            </div>
                            <div class="SignupInputBoxCh">
                                <label for="loginInput_PwCheck">비밀번호확인</label>
                                <input name="passwordCh" type="password" class="formInput" id="SignuInput_PwCheck" placeholder="비밀번호확인 입력">
                            </div>
                            <div class="SignupInputBoxCh">
                                <label for="SignupInput_Name">이름</label>
                                <input name="name" type="text" class="formInput" id="SignupInput_Name" placeholder="이름 입력">
                            </div>
                            <div class="SignupInputBoxCh">
                                <label for="SignupInput_Tel">연락처</label>
                                <input name="tel" type="text" class="formInput" id="SignupInput_Tel" placeholder="휴대폰번호 입력">
                            </div>
                            <div class="SignupInputBoxCh">
                                <label for="SignupInput_Birth">생년월일</label>
                                <input name="birth" type="text" class="formInput" id="SignupInput_Name" placeholder="생년월일 입력">
                            </div>
                            <div class="SignupInputBoxCh">
                                <label for="SignupInput_Email">이메일</label>
                                <input name="email" type="email" class="formInput" id="SignupInput_Email" placeholder="이메일 입력">
                            </div>

                            <button type="submit" class="SignupInputBtn">회원가입 하기</button>
                            <?php
                                if ( $wi == 1 ) {
                                echo "<p>사용자이름이 중복되었습니다.</p>";
                                }
                                if ( $wp == 1 ) {
                                echo "<p>비밀번호가 일치하지 않습니다.</p>";
                                }
                                
                            ?>
                        </div>
                    </form>
                <div>
            </div>

        </div>

    </div>
</body>
    
</body>
</html>