<?php
function motto(){
    echo"Hey this is our motto";
    echo"<br>";
}
motto();
motto();
motto();
motto();
motto();
motto();
motto();
motto();

function addition(){
    $x=30;
$y=40;
  $total=$x+$y;
  echo"Hey this is your $total";
}
addition();
function avg($n1,$n2){
    $avarage=($n1+$n2)/2;
    echo"succcess here is $avarage";
    echo"<br>";
}
avg(76,76);
function simple_interest($p,$r,$t){
    $interest=($p*$r*$t)/100;
    echo $interest;
    echo"<br>";
}
$Principal=1000;
    $Rate=4;
    $Time=3;
    simple_interest($Principal,$Rate,$Time);