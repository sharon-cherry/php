<?php
if(isset($_GET["btn_calc"])) {
    $Name = $_GET["Jina"];
    $weight = $_GET["uzito"];
    $Height = $_GET["kimo"];
    $BMI = $weight / pow($Height, 2);
    if ($BMI < 18.9) {
        echo "Hello" . $Name . "your BMI is" . $BMI . "and you are underweight";
    } elseif ($BMI < 24.9) {
        echo "Hello" . $Name . "your BMI is" . $BMI . "and you are Normal weight";
    } elseif ($BMI < 29.9) {
        echo "Hello" . $Name . "your BMI is" . $BMI . "and you Overweight";
    } else {
        echo " hello" . $Name . "your BMI is" . $BMI . "and you are obese";
    } else{
        echo "Sorry to us ,this is maliciuos";
    }
}
