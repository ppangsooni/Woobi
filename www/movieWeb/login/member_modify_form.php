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
    <title>��������</title>
    
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
                            <h2>��������</h2>
                        </div>
                        <?php include "../lib/header_form.php" ?>
                    </div>
                </header>
                
                <!-- �α��� �Ǿ� �ִ� ȸ���� ������ �о���� php �ڵ� �ۼ� -->
                <?php

           
                        // mysqli_close($conn);
                        if(!$userId){
                            echo "
                            <script>
                                alert($userId);
                                alert('��ȸ���Դϴ�.�α����Ͽ��ּ���');
                                window.location.href='../login/login_form.php';
                            </script>
                            ";
                            exit;

                        }
                        include "../lib/dbconn.php";
                        //�α��� �Ǿ��ִ� ȸ���� ������ �о���� ������ 
                        $sql="SELECT * FROM member WHERE userId='$userId'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);//�����迭 = [�̸���]

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
                                        <!-- DB�� member���̺� �����ϴ� member_modify.php�� �Է°��� �����ϵ��� -->
                                        <form action="./member_modify.php?id=<?=$userId?>" method="post" name="member_form">
                                            <!-- �� �ٸ��� ��, ��ǲ��� �������� ������ ���Ƿ� col1, col2 Ŭ������������ ��Ÿ�ϸ� -->
                                            <div class="form_id">
                                                <div>
                                                <div class="col1">���̵�</div>
                                                <div class="col2"><?= $userId ?></div>
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
                                                <div class="col2"><input type="text" id= "userName" name="userName"  value="<?=$userName?>"></div>
                                            </div>
                                            <div class="form">
                                                <div class="col1">�޴���ȭ</div>
                                                <div class="col2">
                                                    <!-- <input type="text" id=tel name="tel" minlength="11"  maxlength="11" placeholder="'-'�� ������ �޴���ȭ 11�ڸ� "> -->
                                                    <input type="text" onKeyup="this.value=this.value.replace(/[^0-9]/g,'');" name="tel" maxlength="11"  value="<?=$tel?>">
                                                </div>
                                            </div>
                                            <div class="form">
                                                <div class="col1">�������</div>
                                                
                                                <div class="col2"><input type="text" id="birth" name="birth" minlength="8" maxlength="8"  value="<?=$birth?>"></div>
                                                
                                            </div>
                                            <div class="form">
                                                <div class="col1">�̸���</div>
                                                <div class="col2"><input type="text" id= "email" name="email" value="<?=$email?>"></div>
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
                    </section>
                    <footer class="footer">
                        <?php include "../lib/footer.php" ?>
                    </footer>

                <div>
            </div>
        </div>
    </div>
</body>
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
        
        
            // ��й�ȣ�� ��й�ȣ Ȯ�� ĭ�� �Է°��� ������ ��
            if(document.member_form.userPassword.value != document.member_form.pass_confirm.value){
                alert("��й�ȣ�� ��ġ���� �ʽ��ϴ�.\n�ٽ� �Է��� �ּ���.");
                document.member_form.userPassword.focus();
                // Ŀ���� �̵��ϰ� �װ��� ���ִ� �۾��� ���õǾ� ����.
                document.member_form.userPassword.select();
                return;
            }

            // form��Ҹ� ���� submit�ϴ� �޼ҵ�
            document.member_modify.submit(); //�� ������Ʈ ���ϰ� ��, ��ǲ�� name�Ӽ��� document �迭�� ã�� �� ����.
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

    </script>
</html>