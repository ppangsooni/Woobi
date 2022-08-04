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
    <link rel="stylesheet" type="text/css" href="./css/stely_index.css">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>BAAB::CINEMA</title>
</head>
<body>

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
                    <!-----header--------------------->
                    <header class="header">
                        <div class="header_top">
                            <div class="header_top_left">
                                <a href="#">
                                    <img class="header_top_left_logo" src="https://i.ibb.co/swHGtC0/logo1.png" alt="BAaB logo">
                                    <img class="header_top_left_logotext" src="https://i.ibb.co/Y07w6Zr/logo-Text1.png" alt="BAaB">
                                </a>
                            </div>
                            <div class="header_top_right">
                                <a href="#"><img class="header_top_right_ticketing" src="https://i.ibb.co/54y0G5P/ticketing1.png" alt="ticketing1"></a>
                                <a href="#"><img class="header_top_left_cart" src="https://i.ibb.co/dDhFG6f/popcon1.png" alt="cart"></a>
                                <a href="#"><img class="menuBtn" src="https://i.ibb.co/PNB8tQt/menu.png" alt="menu"></a>
                            </div>
                        </div>
                        <div class="header_submenu">
                            <ul class="header_submenu_list">
                                <li><a href="#">Ȩ</a></li>
                                <li><a href="#">�̺�Ʈ</a></li>
                                <li><a href="#">������</a></li>
                                <li><a href="#">�н�Ʈ����</a></li>
                                <li><a href="#">@BaAB</a></li>
                            </ul>
                        </div>
                    </header>
                    <!-----menu--------------------->
                    <nav class="menuSlide">
                        <div class="menuPage">
                            <header class="menuHeader">
                                <?php include "./lib/header_menu.php"?>
                            </header>
                            <section class="menuSection">
                                <div class="menuSection_un"></div>
                                <div class="menuSection_top">
                                    <div class="menuS_t_quickList">
                                        <a class="menuPage_ticketBymovie" href="">
                                            <div>
                                                <img src="https://cdn-icons-png.flaticon.com/128/4221/4221837.png" alt="��ȭ������ �޴�">
                                                ��ȭ������
                                            </div>
                                        </a>
                                        <a class="menuPage_ticketBymovie" href="">
                                            <div>
                                                <img src="https://cdn-icons-png.flaticon.com/128/4812/4812734.png" alt="���庰���� �޴�">
                                                ���庰����
                                            </div>
                                        </a>
                                        <a class="menuPage_ticketBymovie" href="">
                                            <div>
                                                <img src="https://i.ibb.co/dDhFG6f/popcon1.png" alt="�н�Ʈ���� �޴�">
                                                �н�Ʈ����
                                            </div>
                                        </a>
                                        <a class="menuPage_ticketBymovie" href="">
                                            <div>
                                                <img src="https://cdn-icons-png.flaticon.com/128/2548/2548374.png" alt="���丱���� �޴�">
                                                ���丱����
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="menuSection_center">
                                    <div>
                                        <ul>
                                            <div>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png><span>���հ˻�</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png><span>��ȭ��ã��</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png><span>�̺�Ʈ</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png><span>����Ƽ��</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png><span>VIP�����</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png><span>��ü/��� ����</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png><span>����α�</span></a></li>
                                            </div>
                                            <div>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png><span>��ȭ</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png><span>Ư����</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png><span>��������</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png><span>CGV�����</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png><span>Ŭ������</span></a></li>
                                                <li><a><img src=https://cdn-icons-png.flaticon.com/128/4812/4812734.png><span>�����</span></a></li>
                                                <li><a></a></li>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="menuSection_bottom">
                                    �ν�Ÿ
                                </div>
                                <div class="menuPage_aticle">
                                    <!-- ������  -->
                                    ����
                                </div>
                            </section>
                            <footer class="menuFooter">
                                <div>
                                    <a href=""><span>����</span></a>&VerticalSeparator;
                                    <a href=""><span>������</span></a>
                                </div>
                                <div><a</div>
                            </footer>   
                        </div>
                    </nav>
                    <!-----section--------------------->
                    <section class="section">
                        <div class="content" style="height: 1000px;">
                            
                        </div>
                    </section>
                    <!-----footer--------------------->
                    <footer>
                    Footer
                    </footer>
                </div>
            </div>

        </div>

    </div>
</body>
<script src="./js/script_index.js"></script>
</html>