
<?php 
    //�α����� �ϸ� session�� ������ �����ϰ� �� �������鿡�� ��� ����ϰ��� ��.
    //�α��ο� ��� ȭ�鱸���� �ٸ��⿡ ���ǿ� ����Ǿ� �ִ� ȸ������ �� id, name, level �� �о����
    session_start(); //������ �����ϵ� �о���� ����ϰ��� �ϸ� �� �Լ��� ����
 
    $userId="";
    $userName="";
    $grade=""; //ȸ����� : 1~5��� [1���:������, 5���:�ű�ȸ��]
    $userPoint="";

    $potopaly_number ="";
    $potopaly_title ="";
    $potopaly_content ="";
    $potopaly_date ="";
    $potppaly_like  ="";

 
    if( isset($_SESSION['userId'])) $userId= $_SESSION['userId'];
    if( isset($_SESSION['userName'])) $userName= $_SESSION['userName'];
    if( isset($_SESSION['grade'])) $userlevel= $_SESSION['grade'];
    if( isset($_SESSION['userPoint'])) $userPoint= $_SESSION['userPoint'];

    if( isset($_SESSION['potoplay_number'])) $userId= $_SESSION['potoplay_number'];
    if( isset($_SESSION['potopaly_title'])) $userName= $_SESSION['potopaly_title'];
    if( isset($_SESSION['potopaly_content'])) $userlevel= $_SESSION['potopaly_content'];
    if( isset($_SESSION['potopaly_date'])) $userPoint= $_SESSION['potopaly_date']; 
    if( isset($_SESSION['potppaly_like'])) $userPoint= $_SESSION['potppaly_like']; 
?>
<!-- ��� ������ �ΰ�� ȸ������/�α��� ǥ�� ���� -->
            <!-- ��� ������ �׺���̼� �޴� ���� -->
            <div class="pop_header_home">
                <a href="../index.php">
                    <img src="https://cdn-icons-png.flaticon.com/512/5525/5525279.png" alt="home">
                </a>
            </div>
