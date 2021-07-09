<?php
echo"Welcome to our class today";
echo "<br>";
$p=10;
    $q=10.0;
    if($p<=$q)
{
    echo"True";
}
 else{
    echo "False";
}
 echo"<br>";
// GRADING SYSTEM
$marks=25;
if($marks<30)
{
    echo"E";
}elseif ($marks<40){
    echo"D";
}
elseif($marks<50){
    echo"C";
}
elseif($marks<60){
    echo"B";
}
else{
    echo"A";
}
echo"<br>";
//switch case statement
$number =4;
switch($number){
    case 0:
        echo"Number one was found";
        break;
    case 2:
        echo"Number two was found";
        break;
    case 3:
        echo"Number three was found";
        break;
    default:
        echo"Sorry,we dont recognise that number";

}

