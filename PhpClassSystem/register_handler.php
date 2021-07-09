<?php
if(isset($_POST["btn_register"])){
    //receive the values
    $Name=$_POST["x"];
    $Email=$_POST["y"];
    $Pass=$_POST["z"];
    $encrypted_password=md5($Pass);

//connect to database
require_once "db_connection.php";
//prepare to INSERT query
    $insert_query="INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) 
            VALUES (null,'$Name','$Email','$encrypted_password')";

}
//finally save the data using mysqli_query()
$save=mysqli_query( $connection,$insert_query);
//check if the saving was succesful
if(isset($save)){
    header("location:register.php");
}else{
    echo"User registration failed";
}

