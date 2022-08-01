<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="EUC-KR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./stelysheet_signup_php.css">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>ȸ������</title>
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
                                <label for="SignupInput_Id">���̵�</label>
                                <input name="id" type="text" class="formInput" id="SignupInput_Id" placeholder="ID �Է�">
                            </div>
                            <div class="SignupInputBoxCh">
                                <label for="SignupInput_Pw">��й�ȣ</label>
                                <input name="password" type="password" class="formInput" id="SignupInput_Pw" placeholder="��й�ȣ �Է�">
                            </div>
                            <div class="SignupInputBoxCh">
                                <label for="loginInput_PwCheck">��й�ȣȮ��</label>
                                <input name="passwordCh" type="password" class="formInput" id="SignuInput_PwCheck" placeholder="��й�ȣȮ�� �Է�">
                            </div>
                            <div class="SignupInputBoxCh">
                                <label for="SignupInput_Name">�̸�</label>
                                <input name="name" type="text" class="formInput" id="SignupInput_Name" placeholder="�̸� �Է�">
                            </div>
                            <div class="SignupInputBoxCh">
                                <label for="SignupInput_Tel">����ó</label>
                                <input name="tel" type="text" class="formInput" id="SignupInput_Tel" placeholder="�޴�����ȣ �Է�">
                            </div>
                            <div class="SignupInputBoxCh">
                                <label for="SignupInput_Birth">�������</label>
                                <input name="birth" type="text" class="formInput" id="SignupInput_Name" placeholder="������� �Է�">
                            </div>
                            <div class="SignupInputBoxCh">
                                <label for="SignupInput_Email">�̸���</label>
                                <input name="email" type="email" class="formInput" id="SignupInput_Email" placeholder="�̸��� �Է�">
                            </div>

                            <button type="submit" class="SignupInputBtn">ȸ������ �ϱ�</button>
                            <?php
                                if ( $wi == 1 ) {
                                echo "<p>������̸��� �ߺ��Ǿ����ϴ�.</p>";
                                }
                                if ( $wp == 1 ) {
                                echo "<p>��й�ȣ�� ��ġ���� �ʽ��ϴ�.</p>";
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