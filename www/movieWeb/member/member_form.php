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
    <meta name="description" content="BaAB�� ������ �Ǿ����">
    <link rel="stylesheet" type="text/css" href="../css/stely_form.css">
    <link rel="stylesheet" type="text/css" href="../css/stely_member.css">
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
                            <a class="pop_header_back" href="back();">
                                <img src="https://i.ibb.co/dB2ztsX/back.png" alt="back">
                            </a>
                            <h2>ȸ������</h2>
                        </div>
                        <?php include "../lib/header_form.php" ?>
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
                                    <h4>singn up</h4>
                                    <div class="formBox">
                                        <!-- DB�� member���̺� �����ϴ� member_insert.php�� �Է°��� �����ϵ��� -->
                                        <form action="./member_insert.php" method="post" name="member_form">
                                            <!-- �� �ٸ��� ��, ��ǲ��� �������� ������ ���Ƿ� col1, col2 Ŭ������������ ��Ÿ�ϸ� -->
                                            <div class="form_id">
                                                <div>
                                                <div class="col1">���̵�</div>
                                                <div class="col2"><input type="text" id= "userId" name="userId" minlength="4" maxlength="20" placeholder="���ڿ� ������ �Է�(4~20�ڸ�)���ּ���"></div>
                                                </div>
                                                <!-- id�ٸ� �����ϴ� ĭ -->
                                                <div  class="col3">
                                                    <div class="checkIdBt"  onclick="checkId()">
                                                        <span>ID �ߺ�üũ</span>
                                                    </div>    
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
                                                
                                                <div class="col2"><input type="text" id="birth" name="birth" minlength="8" maxlength="8" placeholder="'-'�� ������ 8�ڸ� ���� (�� 20220802) "></div>
                                                
                                            </div>
                                            <div class="form">
                                                <div class="col1">�̸���</div>
                                                <div class="col2"><input type="text" id= "email" name="email" placeholder="'@'�� �����Ͽ� �Է����ּ��� (as123@naver.com)"></div>
                                            </div>
                                            <!-- input����� submit, reset���� ����� �̹����� �� ���� -->
                                            <!-- input����� Ÿ�� �� image Ÿ������ �ϸ� �̹��� ��ư�̸鼭 submit ��� -->
                                            <!-- ���� ������ �� ���� ����ִ��� �����ϴ� �۾��� �ϰ� �;.. -->
                                            <!-- Javascript�� �̿��ؼ� submit()�غ��� -->
                                            <div class="bottom_line">
                                                <div class="imgBtns">
                                                    <div>
                                                        <img class="submitIcon" src="https://i.ibb.co/mCcp0Wg/submit-wi.png" onclick="submitForm()" alt="�Ϸ��ư">
                                                        <span>�Ϸ�</span>
                                                    </div>
                                                    <div>
                                                        <img class="resetIcon" src="https://i.ibb.co/QccthCz/reset-wi.png" onclick="resetForm()" alt="�ʱ�ȭ��ư">
                                                        <span>�ʱ�ȭ</span>
                                                    </div>
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
                    <!---------------menu(nav)------------------------------------------------>
                <div>
            </div>
        </div>
    </div>
    <!-- <script src="../js/script_member.js"></script> -->
    <!-- ���� �ڹٽ�ũ��Ʈ �ۼ�
    <!- ���� ����ó��(���̵�üũ������)�� ���� ���� �ڹٽ�ũ��Ʈ�� �ۼ� -->
    <script>

        // window.onload : ������ �ε� �Ϸ� ���¸� ��Ÿ���ϴ�
        // document.getElementById : Ư�� ��ü �±� ���̵� �����մϴ� 
        // scrollTop : Ư�� �±� ��ũ�� ��ġ�� �����մϴ�        



        /* [html ���� �ε� �� �̺�Ʈ ��� ��� �ǽ�] */
        window.onload = function() {
            console.log("");
            console.log("[window onload] : [start]");
            console.log("");
        };



        /* [top ��ũ�� �̺�Ʈ �Լ� ����] */
        function top_scroll_move(){
            console.log("");
            console.log("[top_scroll_move] : [start]");
            console.log("");

            // ��ũ���� �̵��� ���̾ƿ� ���̵� ����
            let screen = document.querySelector(".screen");

            // [�� ������� ��ũ�� �̵� �ǽ�]
            screen.scrollTop = 0;
        };



        /* [bottom ��ũ�� �̺�Ʈ �Լ� ����] */
        function bottom_scroll_move(){
            console.log("");
            console.log("[bottom_scroll_move] : [start]");
            console.log("");

            // ��ũ���� �̵��� ���̾ƿ� ���̵� ����
            let screen = document.querySelector(".screen");

            // [�� �ϴ����� ��ũ�� �̵� �ǽ�]
            screen.scrollTop = screen.scrollHeight;
        };
        //--------------------footer------------------------------
        // footer���� ��ư
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
            open("./check_id.php?userId="+userId, "���̵�üũ", "width=300, height=100, left=200, top=100");
        }
        

    </script>
</body>
    
</html>