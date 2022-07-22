<?php
// var_dump($_REQUEST)."<br>";
$eve1Name =  $_REQUEST["popup1Input_name"];
$eve1PhoneNum =  $_REQUEST["popup1Input_phoneNum"];
$eve1Email =  $_REQUEST["popup1Input_email"];

$eve1TicketNum =  $_REQUEST["popup1Input_TicketNum"];
$eve1check =  $_REQUEST["popup1Input_check"];
echo "1Name: ".$eve1Name."<br>";
echo "1PhoneNum: ".$eve1PhoneNum."<br>";
echo "1Email: ".$eve1Email."<br>";
echo "1TicketNum: ".$eve1TicketNum."<br>";
echo "1check: ".$eve1check."<br>";

foreach($_REQUEST as $key => $val) {
    echo $key. ":" .$val."<br>";
}
?>