<?php
$username="root";
$host="localhost";
$password="";
$database="morning_class_system";

$connection=mysqli_connect($host,$username, $password,$database);

if (!isset($connection)){
    die("Connection failed");
}
