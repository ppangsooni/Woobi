
<?php 
    //로그인을 하면 session에 정보를 저장하고 각 페이지들에서 모두 사용하고자 함.
    //로그인에 띠라 화면구성이 다르기에 세션에 저장되어 있는 회원정보 중 id, name, level 값 읽어오기
    session_start(); //세션을 저장하든 읽어오든 사용하고자 하면 이 함수로 시작
 
    $userId="";
    $userName="";
    $grade=""; //회원등급 : 1~5등급 [1등급:관리자, 5등급:신규회원]
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
<!-- 헤더 영역의 로고와 회원가입/로그인 표시 영역 -->
            <!-- 헤더 영역의 네비게이션 메뉴 영역 -->
            <div class="pop_header_home">
                <a href="../index.php">
                    <img src="https://cdn-icons-png.flaticon.com/512/5525/5525279.png" alt="home">
                </a>
            </div>
