<?php
    function php_func(){
    $userId= $_GET['userId'];

    // ���� �������� ���� ���� ������
    if(!$userId){
        echo "<script>
        function popupClose() {
            alert('���̵� �Է����ּ���');
        }</script>;";
        exit;
    }

    // �����ͺ��̽� ���� ������ ���
    include "../lib/dbconn.php";

    // ���޹��� id�� member���̺� �ִ��� �˻�
    $sql= "SELECT * FROM member WHERE userId='$userId'";
    $result= mysqli_query($conn, $sql);
    $rowNum=mysqli_num_rows($result);

    // $rowNum�� 0�� �ƴϸ� �ߺ�
    if($rowNum){
        echo "���̵� �ߺ� �˴ϴ�.";
        echo "�ٸ� ���̵� ����ϼ���.";
    }else{
        echo "��밡���� ���̵� �Դϴ�.";
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
    <!--sweetalert2(alert â )-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.26/dist/sweetalert2.min.css" integrity="sha256-KVbvREKpOwFT7izITgnL7DtwEM1JF8bQVdBII5no7Ks=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.26/dist/sweetalert2.min.js" integrity="sha256-BM3Izbkf7noln7sbkBgjmouxAgdb6FK3lDUPpBtnTyE=" crossorigin="anonymous"></script>
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
                                            <div class="form">
                                                <div class="col1">���̵�</div>
                                                <div class="col2"><input type="text" id= "userId" name="userId" minlength="4" maxlength="20" placeholder="���ڿ� ������ �Է�(4~20�ڸ�)���ּ���"></div>
                                                <!-- id�ٸ� �����ϴ� ĭ -->
                                                <div class="col3" onclick="checkId()">
                                                <img class="idckIcon_ok" src="https://i.ibb.co/T2BcZWW/chk.png" alt="idCheck_ok">
                                                <img class="idckIcon_no" src="https://i.ibb.co/zmnt4gS/x.png" alt="idCheck_no">
                                                Id �ߺ�üũ

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
                                                <div><img class="submitIcon" src="https://i.ibb.co/XZDYmTh/submit.png" onclick="submitForm()" alt="�Ϸ��ư">�Ϸ�</div>
                                                <div><img class="resetIcon" src="https://i.ibb.co/dB09Hfy/close.png" onclick="resetForm()" alt="�ʱ�ȭ��ư">�ʱ�ȭ</div>
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
    <!-- ���� �ڹٽ�ũ��Ʈ �ۼ� -->
    <!-- ���� ����ó��(���̵�üũ������)�� ���� ���� �ڹٽ�ũ��Ʈ�� �ۼ� -->
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
            if(!document.member_formCh.userId.value){
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
            open("./check_idCopy.php?userId="+userId, "���̵�üũ", "width=300, height=100, left=200, top=100");
        }
        // function checkId(){
        //     // ����ڰ� �Է��� id�� ������
        //     let userId= document.member_form.userId.value;
            
        //     let filter = "win16|win32|win64|mac|macintel";
        //         if(0 > filter.indexOf(navigator.platform.toLowerCase())){
        //             console.log("Client platform : Mobile");
    
        //         }else{
        //             console.log("Client platform : PC");
        //             open("./check_id.php?userId="+userId, "���̵�üũ", "width=300, height=100, left=200, top=100");
        //         }
        // }


    </script>
</body>
    
</html>