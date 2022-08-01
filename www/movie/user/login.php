<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="EUC-KR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./stelysheet_login_php.css">
    <link rel="icon" type="image/x-icon" href="https://i.ibb.co/swHGtC0/logo1.png">
    <title>�α���</title>
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
                    <div><img src="https://i.ibb.co/swHGtC0/logo1.png" alt="BAaB logo"></div>
                    <form method="POST" action="./loginProcess.php">
                        <div class="loginInputBox">
                            <div class="loginInputBoxCh">
                                <label for="loginInput_Id"><img src="https://i.ibb.co/54y0G5P/ticketing1.png"></label>
                                <input name="id" type="text" class="formInput" id="loginInput_Id" placeholder="ID �Է�">
                            </div>
                            <div class="loginInputBoxCh">
                                <label for="loginInput_Pw"><img src="https://i.ibb.co/54y0G5P/ticketing1.png"></label>
                                <input name="password" type="password" class="formInput" id="loginInput_Pw" placeholder="��й�ȣ �Է�">
                            </div>
                            
                            <button type="submit" class="loginInputBtn">�α���</button>
                        </div>

                    </form>
                    <a href="./signup.php">ȸ������</a>
                <div>
            </div>

        </div>

    </div>
</body>
    
</body>
</html>