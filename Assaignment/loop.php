<?php
//while loop
$x=0;
while($x<=101){
    echo $x;
    $x++;
    echo"<br>";
    echo strrev($x);
}
//do while loop
$y=0;
do{
    echo $y;
    $y++;
    echo"<br>";
}while($y<=101);
echo strrev($y);
//FOR LOOP
for( $w =0; $w<=101;$w++){
    echo $w;
    echo"<br>";

} echo strrev($w);
