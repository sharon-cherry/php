<?php
//check if the delete button has been clicked
if(isset($_GET["my_id"])){
    $id=$_GET["my_id"];

    //to delete connect to the database
    require_once "db_connection.php";

    //prepare the delete query
    $delete_query="DELETE FROM `users` WHERE id='$id'";

    //finally execute the delete query using mysqli_query()
    $delete=mysqli_query($connection,$delete_query);
    //check if the deletion was succesful
    if(isset($delete)){
        //return to users.php to see the changes
        header("location:users_.php");
    }else{
        echo"Deleting failed";
    }
}
