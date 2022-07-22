
<?php
// var_dump($_REQUEST);
// echo $_REQUEST;


// foreach($_REQUEST as $key => $val) {
//     echo "key: ".$key."=>".$val."<br>";
//     switch($key) {
//         case "fname";
//         break;

//         case "lname";
//         break;
//     }
// }

$fname =  $_REQUEST["fname"];
$fname1 =  $_POST["fname"];
$fname2  = $_GET["fname"];
$last = $_GET["lName"];
echo "Request".$fname."<br>";
echo "POST".$fname1."<br>";
echo "GET".$fname2."<br>";
echo "GET".$last."<br>";

foreach($_REQUEST as $key => $val) {
    echo $key. ":" .$val."<br>";
}
?>