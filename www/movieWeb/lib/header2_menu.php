<?php 
    //�α����� �ϸ� session�� ������ �����ϰ� �� �������鿡�� ��� ����ϰ��� ��.
    //�α��ο� ��� ȭ�鱸���� �ٸ��⿡ ���ǿ� ����Ǿ� �ִ� ȸ������ �� id, name, level �� �о����
    session_start(); //������ �����ϵ� �о���� ����ϰ��� �ϸ� �� �Լ��� ����
 
    $userId="";
    $userName="";
    $grane=""; //ȸ����� : 1~5��� [1���:������, 5���:�ű�ȸ��]
    $userPoint="";
 
    if( isset($_SESSION['userId'])) $userId= $_SESSION['userId'];
    if( isset($_SESSION['userName'])) $userName= $_SESSION['userName'];
    if( isset($_SESSION['grane'])) $grane= $_SESSION['grane'];
    if( isset($_SESSION['userPoint'])) $userPoint= $_SESSION['userPoint'];
?>
<!-- ��� ������ �ΰ�� ȸ������/�α��� ǥ�� ���� --> 
        <div class="menuPage_top">
            
            <!-- 1. �ΰ��� -->
            <div class="menuPage_topLeft">
                <img src="https://i.ibb.co/V3Y54Rm/logo2.png" alt="BaAB">
            </div>
            <!-- ��� ������ �׺���̼� �޴� ���� -->
            <div class="menuPage_topRight">
                <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/5525/5525279.png" alt="home">
                <img src="https://i.ibb.co/SwpVpTz/notice.png" alt="notice">
                <img class= "menuClose" src="https://i.ibb.co/dB09Hfy/close.png" alt="close">
            </div>
        </div>
        <!-- 2. ȸ������/�α��� ��ư ǥ�� ���� -->
        <div class="menuPage_login">
            <div>
            <?php if(!$userId){ ?>
                    <li class="userKeyup"><a href="../login/login_form.php">�α����� ���ּ���</a></li>
                    <li>�������� �����̳���?<a href="../member/member_form.php" class="userKeyup"> ȸ������ </a></li>
                <?php }else{ ?>
                    <div class="userLogin">
                        <li>
                            <?php
                                $userId = $_SESSION['userId'];
                                // $grane = $_SESSION['grane'];
                                // $userPoint = $_SESSION['userPoint'];
                            echo "<p class='userKeyup'> $userId �� </p>";
                            ?>
                        </li>
                        <li><a href="../login/logout.php">�α׾ƿ�</a></li>
                    </div>
                <?php }?>
                    <!-- �����ڸ��� �α��εǾ��� �� �߰���.. -->
                    <?php if($grane==1){?>
                    <li><a href="../admin/admin.php">�����ڸ��</a></li>
                <?php } ?>
            </div>
            <div>
                    <a href=""> ����Ʈ������ </a>&VerticalSeparator;
                    <a href=""> ����Ƽī�� </a>&VerticalSeparator;
                <?php if(!$userId){ ?>
                    <a href="../login/member_modify_form.php"> MY BaAB </a>
                <?php }else{ ?>
                    <a href="../login/member_modify_form.php"> MY BaAB </a>
                <?php }?>
            </div>
                

        </div>

