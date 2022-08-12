<?php 
    //�α����� �ϸ� session�� ������ �����ϰ� �� �������鿡�� ��� ����ϰ��� ��.
    //�α��ο� ��� ȭ�鱸���� �ٸ��⿡ ���ǿ� ����Ǿ� �ִ� ȸ������ �� id, name, level �� �о����
    session_start(); //������ �����ϵ� �о���� ����ϰ��� �ϸ� �� �Լ��� ����
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="EUC-KR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/stely_form.css">
    <link rel="stylesheet" type="text/css" href="../css/stely_login.css">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>login</title>
</head>
<div class="bg">
        <!---------------background_scroll(bgScroll.php------------------------------------------------>
        <?php include "../lib/bgScroll.php" ?>
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
                                <h2>�α���</h2>
                            </div>
                            <?php include "../lib/header_form.php" ?>
                            <!-- php include "../lib/header_form.php" -->
                        </div>
                    </header>
                    <section class="pop_section">
                        <!-------- ���� �̹��� ���� ------>
                        <!--  �ΰ��� -->
                        <div class="pop_section_logo">
                            <div>
                                <img src="https://i.ibb.co/swHGtC0/logo1.png" alt="BaAB">
                            </div>
                        </div>    
                        <!-- �ΰ� �Ʒ� �������� -->
                        <div class="pop_section_main">
                            <!-- 1. main_Top -->
                            <article class="pop_section_main_Top">
                                    <h4></h4>
                                    <div class="formBox">
                                        <!-- DB�� member���̺� �����ϴ� member_insert.php�� �Է°��� �����ϵ��� -->
                                        <form action="./login.php" method="post" name="login">
                                            <!-- �� �ٸ��� ��, ��ǲ��� �������� ������ ���Ƿ� col1, col2 Ŭ������������ ��Ÿ�ϸ� -->
                                            <div class="form">
                                                
                                                <div class="col1">���̵�</div>
                                                <div class="col2"><input type="text" id= "userId" name="userId" placeholder="���ڿ� ������ �Է�(4~20�ڸ�)���ּ���"></div>
                                                
                                            </div>
                                            <div class="form">
                                                <div class="col1">��й�ȣ</div>
                                                <div class="col2"><input type="password" id= "userPassword" name="userPassword"placeholder="����+���빮��+���ҹ���+Ư������ ����(8�ڸ��̻�)"></div>
                                            </div>
                                            <div class="bottom_line">
                                                <div class="textBtns">
                                                    <button class="loginBtn" type="submit" onclick="loginBtn()" >
                                                        <span>�α���</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>  
                                </article>
                                <!-- 2. main_bottom -->
                                <article class="pop_section_main_bottom">
                                    <!-- <h4>main_bottom</h4> -->
                                    <div>
                                        <div class="formBtnType">
                                            <div class="formBtnTypeCh1"><img src="https://i.ibb.co/3mcScVf/image.png" alt="naverIcon"></div>
                                            <div class="formBtnTypeCh2">���̹� ����α���</div>
                                        </div>
                                        <div class="formBtnType">
                                            <div class="formBtnTypeCh1"><img src="https://i.ibb.co/BL1RghR/image.png" alt="kakaoIcon"></div>
                                            <div class="formBtnTypeCh2">īī�� ����α���</div>
                                        </div>
                                        <div class="formBtnType">
                                            <div class="formBtnTypeCh1"><img src="https://i.ibb.co/9Ydn27t/apple.png" alt="appleIcom"></div>
                                            <div class="formBtnTypeCh2"> ����α���</div>
                                        </div>
                                    </div>
                                </article>
                            </div>        
                        </div>

                    </section>
                    <footer class="footer">
                        <?php include "../lib/footer.php" ?>
                    </footer>

                <div>
            </div>

        </div>

    </div>
</body>
<script src="../js/script_index_form.js"></script>
</html>