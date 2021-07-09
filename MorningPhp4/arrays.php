<?php
//ARRAYS

//Index Arrays
//Associative Arrays
$names=["Jeff","Betty","Sharon","Lameck","Kevo"];
echo$names[2]."<br>";
echo $names[3]."<br>";

foreach($names as $x){
    echo $x."<br>";
}
//Using the for loop

$ArrCount=count($names);
for($p=0; $p<$ArrCount;$p++){
    echo $names[$p]."<br>";
}
//Associative Arrays
$students =["adm1"=>"John","adm2"=>"Caro","adm3"=>"Rikki"];
echo $students["adm2"]."<br>";
//asort sorting
asort($students);
//ksort sorting
//arsort sorting
foreach($students as $key => $value){
    echo $value."<br>";
}