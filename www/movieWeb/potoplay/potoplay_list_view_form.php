<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="EUC-KR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BaAB�� ������ �Ǿ����">
    <link rel="stylesheet" type="text/css" href="../css/stely_form.css">
    <link rel="stylesheet" type="text/css" href="../css/stely_potoplayView.css">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>�� �����÷���</title>
    
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
                            <h2>�����÷��� �ڶ��ϱ�</h2>
                        </div>
                        <?php include "../lib/header_form.php" ?>
                    </div>
                </header>
                    <section class="pop_section2">                                
                        <?php 
                            include('./potoplay_list_view.php');
                        ?>
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

 

    </script>
</body>
    
</html>