<?php
// var_dump($_REQUEST)."<br>";
// $eve1Name =  $_REQUEST["popup1Input_name"];
// $eve1PhoneNum =  $_REQUEST["popup1Input_phoneNum"];
// $eve1Email =  $_REQUEST["popup1Input_email"];

// $eve1TicketNum =  $_REQUEST["popup1Input_TicketNum"];
// $eve1check =  $_REQUEST["popup1Input_check"];
// echo "1Name: ".$eve1Name."<br>";
// echo "1PhoneNum: ".$eve1PhoneNum."<br>";
// echo "1Email: ".$eve1Email."<br>";
// echo "1TicketNum: ".$eve1TicketNum."<br>";
// echo "1check: ".$eve1check."<br>";

// foreach($_REQUEST as $key => $val) {
//     echo $key. ":" .$val."<br>";
// }


//email���Խ� 
//^[a-zA-Z0-9]{1}[a-zA-Z0-9\-_]@[a-z0-9]{1}[a-z0-9\-]+[a-z0-9]{1}\.(([a-z]{1}[a-z.]+[a-z]{1})|([a-z]+))$
//phone ���Խ�
// '/^(010|011|016|017|018|019)-[^0][0-9]{3,4}-[0-9]{4}/'
//TicketNum ���Խ�
//'/^[a-zA-Z0-9]{12}/'


// if(preg_match($emChk, $eve1Email)) {
//     //�������
//     echo $eve1Email;
// } else {
//     echo "<script>\n";
//     echo "alert('�ٽ� Ȯ�ιٶ��ϴ�')\n";
//     echo "history.back();\n";
//     echo "</script>";    
// }
$eve1Name =  $_REQUEST["popup1Input_name"];
$eve1PhoneNum =  $_REQUEST["popup1Input_phoneNum"];
$eve1Email =  $_REQUEST["popup1Input_email"];
$eve1TicketNum =  $_REQUEST["popup1Input_TicketNum"];

$phoChk = '/^(010|011|016|017|018|019)-[^0][0-9]{3,4}-[0-9]{4}/';
$emChk = '/^[a-zA-Z0-9]{1}[a-zA-Z0-9\-_]@[a-z0-9]{1}[a-z0-9\-]+[a-z0-9]{1}\.(([a-z]{1}[a-z.]+[a-z]{1})|([a-z]+))$/';
$tickChk  = '/^[a-zA-Z0-9]{12}/';


if(preg_match($emChk, $eve1Email)) {
    //�������
    echo $eve1Name."�� &#9787;<br> �Ʒ��� ������ ��÷�����Ϸ� <br>".$eve1PhoneNum.$eve1Email.$eve1TicketNum;
} else {
    echo "<script>\n";
    echo "alert('�ٽ� Ȯ�ιٶ��ϴ�')\n";
    echo "history.back();\n";
    echo "</script>";    
}



?>