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
    <link rel="stylesheet" type="text/css" href="./css/stely_menu.css">
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
                    <header class="pop_header">
                            <?php include "../lib/header_form.php" ?>
                    </header>
                    <section class="pop_section">
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
                    <footer class="pop_footer">
                        <?php include "../lib/footer_form.php" ?>
                    </footer>
                    <!---------------menu(nav)------------------------------------------------>
                <div>
            </div>
        </div>
    </div>
    <!-- ���� �ڹٽ�ũ��Ʈ �ۼ� -->
    <script>
        
        function submitForm(){
 
            // �Է°� �߿� ��������� �ȵǴ� �͵��� ����.

            // id
            if(!document.member_form.userId.value){
                alert("���̵� �Է��ϼ���.");
                //Ŀ��(��Ŀ��)�� ���̵� ��ǲ��ҷ� �̵�
                document.member_form.userId.focus();
                return;
            }
            // ��й�ȣ
            if(!document.member_form.userPassword.value){
                alert("��й�ȣ�� �Է��ϼ���.");
                document.member_form.userPassword.focus();
                return;
            }
            // ��й�ȣ Ȯ��
            if(!document.member_form.pass_confirm.value){
                alert("��й�ȣ Ȯ���� �Է��ϼ���.");
                document.member_form.pass_confirm.focus();
                return;
            }
            // �̸�
            if(!document.member_form.userName.value){
                alert("�̸��� �Է��ϼ���.");
                document.member_form.userName.focus();
                return;
            }
            // �޴���ȭ
            if(!document.member_form.tel.value){
                alert("�޴���ȭ�� �Է��ϼ���.");
                document.member_form.tel.focus();
                return;
            }
            // �������
            if(!document.member_form.birth.value){
                alert("��������� �Է��ϼ���.");
                document.member_form.birth.focus();
                return;
            }
            // �̸���
            if(!document.member_form.email.value){
                alert("�̸����� �Է��ϼ���.");
                document.member_form.email.focus();
                return;
            }
            // ��й�ȣ�� ��й�ȣ Ȯ�� ĭ�� �Է°��� ������ ��
            if(document.member_form.userPassword.value != document.member_form.pass_confirm.value){
                alert("��й�ȣ�� ��ġ���� �ʽ��ϴ�.\n�ٽ� �Է��� �ּ���.");
                document.member_form.userPassword.focus();
                // Ŀ���� �̵��ϰ� �װ��� ���ִ� �۾��� ���õǾ� ����.
                document.member_form.userPassword.select();
                return;
            }

            // form��Ҹ� ���� submit�ϴ� �޼ҵ�
            document.member_form.submit(); //�� ������Ʈ ���ϰ� ��, ��ǲ�� name�Ӽ��� document �迭�� ã�� �� ����.
            }

            // �ʱ�ȭ ��ư �̹��� Ŭ����
            function resetForm(){
            document.member_form.userId.value="";
            document.member_form.userPassword.value="";
            document.member_form.pass_confirm.value="";
            document.member_form.userName.value="";
            document.member_form.tel.value="";
            document.member_form.birth.value="";
            document.member_form.email.value="";

            // ù��° �Է� ��ҷ� �̵�
            document.member_form.userId.focus();
         }


        //���̵� �ߺ� Ȯ�� ��ư Ŭ��
        function checkId(){
            // ����ڰ� �Է��� id�� ������
            let userId= document.member_form.userId.value;

            // DB���� ���� ���̵� �ִ��� Ȯ���ϰ� ����� �����ִ� ���ο� ������ ����
            open("./check_id.php?userId="+userId, "���̵�üũ", "width=300, height=100, left=200, top=100");

        }
    </script>
</body>
    
</html>