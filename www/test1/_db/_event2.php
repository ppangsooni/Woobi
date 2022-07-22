<?php
// var_dump($_REQUEST)."<br>";
$eve2imgSel =  $_REQUEST["codeImgSelect"];
$eve2filterSel =  $_REQUEST["codeFilterSelect"];
$eve2designSel =  $_REQUEST["codeDesignSelect"];
$eve2DcolorSel =  $_REQUEST["codeDColorSelect"];
$eve2frameSel =  $_REQUEST["codeFrameSelect"];
$eve2FcolorSel =  $_REQUEST["codeFColorSelect"];
$eve2sizeSel =  $_REQUEST["codeSizeSelect"];


$eve2PhoneNum =  $_REQUEST["popup2Input_phoneNum"];
$eve2TicketNum =  $_REQUEST["popup2Input_TicketNum"];
$eve2check =  $_REQUEST["popup2Input_check"];
// echo "2ImgSel: ".$eve2imgSel."<br>";
// echo "2FilterSel: ".$eve2filterSel."<br>";
// echo "2DesignSel: ".$eve2designSel."<br>";
// echo "2DesignColorSel: ".$eve2DcolorSel."<br>";
// echo "2FrameSel: ".$eve2frameSel."<br>";
// echo "2FrameColorSel: ".$eve2FcolorSel."<br>";
// echo "2SizeSel: ".$eve2sizeSel."<br>";


// echo "2PhoneNum: ".$eve2PhoneNum."<br>";
// echo "2TicketNum: ".$eve2TicketNum."<br>";
// echo "2Check: ".$eve2check."<br>";

foreach($_REQUEST as $key => $val) {
    echo $key. " : " .$val."<br>";
}
?>