<?php
//check if the button calculate has been clicked
if(isset($_GET["btn_calc"])){
    //receive the rest of the data from the form
    $FirstNo=$_GET["x"];
    $SecondNo=$_GET["y"];

    $TotalNo=$FirstNo+$SecondNo;
    echo $TotalNo;
}else{
    //stop and logout the user
    echo"Get out of here";
}