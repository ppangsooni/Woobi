<?php 
    session_start(); 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BaAB�� ������ �Ǿ����">
    <link rel="stylesheet" type="text/css" href="../css/stely_form.css">
    <link rel="stylesheet" type="text/css" href="../css/stely_potoplayView.css">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>�����÷��� �����ϱ�</title>
     
</head>
<body>
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
                            <h2>�����÷��� �����ϱ�</h2>
                        </div>
                        <?php include "../lib/header_form.php" ?>
                    </div>
                </header>
                    <section class="pop_section2">                                
                        <?php include "./potoplay_userlist_modify.php"?>
                    </section>
                    <!---------------menu(nav)------------------------------------------------>
                <div>
            </div>
        </div>
    </div>
    <!-- <script src="../js/script_member.js"></script> -->
    <!-- ���� �ڹٽ�ũ��Ʈ �ۼ�
    <!- ���� ����ó��(���̵�üũ������)�� ���� ���� �ڹٽ�ũ��Ʈ�� �ۼ� -->
    <script>
        document.getElementById("potoplay_write_files").onchange = function () {
            var reader = new FileReader();

            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                document.getElementById("potoplay_write_image").src = e.target.result;
            };

            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        };
            
 

    </script>
</body>
    
</html>