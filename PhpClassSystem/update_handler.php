<?php
//receive updated record return it to database
if(isset($_POST["btn_update"])){
    $id=$_POST["a"];
    $updated_name=$_POST["x"];
    $updated_email=$_POST["Y"];
    $updated_password=$_POST["z"];
    $encrypted_password=($updated_password);

    //connected to database
    require_once"db_connection.php";
    //updating by use of mysqli_query
    $update_query="UPDATE `users` SET `jina`='$updated_name'`arafa`='$updated_email',`siri`='$encrypted_password' WHERE id=$id";
    //finally update the user by use of musqli_query()
    if(isset($update)){
        //Redirect back to users
        header("location;users_.php");
    }else{
        echo "updating failed";
    }
}
