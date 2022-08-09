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
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>ȸ������</title>
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
                            <h2>ȸ������</h2>
                        </div>
                        <?php include "../lib/header_form.php" ?>
                    </div>
                </header>
                    <section class="pop_section">
                        <!--  �ΰ��� -->
                        <div class="pop_section_logo">
                            <div>
                                <img src="https://i.ibb.co/swHGtC0/logo1.png" alt="BaAB">
                            </div>
                        </div>
                        <div id="main_content">
                            <div id="join_box">
                                <!-- DB�� member���̺� �����ϴ� member_insert.php�� �Է°��� �����ϵ��� -->
                                <form action="./member_insert.php" method="post" name="member_form">
                                    <h2>ȸ�� ����</h2>
                
                                    <!-- �� �ٸ��� ��, ��ǲ��� �������� ������ ���Ƿ� col1, col2 Ŭ������������ ��Ÿ�ϸ� -->
                                    <div class="form id">
                                        <div class="col1">���̵�</div>
                                        <div class="col2"><input type="text" id= "userId" name="userId" minlength="4" maxlength="20" placeholder="���ڿ� ������ �Է�(4~20�ڸ�)���ּ���"></div>
                                        <!-- id�ٸ� �����ϴ� ĭ -->
                                        <div class="col3">
                                        <img src="https://i.ibb.co/hDCK19y/idcheck.png" onclick="checkId()">Id �ߺ�üũ
                                        </div>
                                    </div>
                                    <div class="form">
                                        <div class="col1">��й�ȣ</div>
                                        <div class="col2"><input type="password" id= "userPassword" name="userPassword" minlength="8" maxlength="20" placeholder="����+���빮��+���ҹ���+Ư������ ����(8�ڸ��̻�)"></div>
                                    </div>
                                    <div class="form">
                                        <div class="col1">��й�ȣ Ȯ��</div>
                                        <div class="col2"><input type="password" id= "pass_confirm" name="pass_confirm" minlength="8" maxlength="20" placeholder="������ ��й�ȣ �ٽ��Է����ּ���"></div>
                                    </div>
                                    <div class="form">
                                        <div class="col1">�̸�</div>
                                        <div class="col2"><input type="text" id= "userName" name="userName" placeholder="�̸��� �Է����ּ���"></div>
                                    </div>
                                    <div class="form">
                                        <div class="col1">�޴���ȭ</div>
                                        <div class="col2">
                                            <!-- <input type="text" id=tel name="tel" minlength="11"  maxlength="11" placeholder="'-'�� ������ �޴���ȭ 11�ڸ� "> -->
                                            <input type="text" onKeyup="this.value=this.value.replace(/[^0-9]/g,'');" name="tel" maxlength="11" placeholder="'-'�� ������ �޴���ȭ 11�ڸ� ">
                                        </div>
                                    </div>
                                    <div class="form">
                                        <div class="col1">�������</div>
                                        <div class="col2">
                                        <div class="col2"><input type="text" id="birth" name="birth" minlength="8" maxlength="8" placeholder="'-'�� ������ 8�ڸ� ���� (�� 20220802) "></div>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <div class="col1">�̸���</div>
                                        <div class="col2"><input type="text" id= "email" name="email" placeholder="'@'�� �����Ͽ� �Է����ּ��� (as123@naver.com)"></div>
                                    </div>
                                    <!-- input����� submit, reset���� ����� �̹����� �� ���� -->
                                    <!-- input����� Ÿ�� �� image Ÿ������ �ϸ� �̹��� ��ư�̸鼭 submit ��� -->
                                    <!-- ���� ������ �� ���� ����ִ��� �����ϴ� �۾��� �ϰ� �;.. -->
                                    <!-- Javascript�� �̿��ؼ� submit()�غ��� -->
                                    <div class="bottom_line"></div>
                                    <div class="buttons">
                                        <!-- <button type="submit" onclick="submitForm()"></button> -->
                                        <div><img src="https://i.ibb.co/XZDYmTh/submit.png" onclick="submitForm()" alt="�Ϸ��ư">�Ϸ�</div>
                                        <div><img src="https://i.ibb.co/dB09Hfy/close.png" onclick="resetForm()" alt="�ʱ�ȭ��ư">�ʱ�ȭ</div>
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