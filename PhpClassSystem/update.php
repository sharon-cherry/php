<?php
//check if update button has been clicked
if(isset($_GET["my_id"])){
    $received_id=$_GET["my_id"];
    $received_name=$_GET["my_name"];
    $received_email=$_GET["my_email"];
    $received_pass=$_GET["my_pass"];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h1 class="text-info text-center">Updating user</h1>
        <form action="update_handler.php" method="post">
                <input value="<?php echo $received_id;?>" type="hidden"name="a">
            <div class="form-group">
                <input value="<?php echo $received_name;?>" type="text" class="form-control" name="b">
            </div>
            <div class="form-group">
                <input value="<?php echo$received_email;?>"  class="form-control" type="email" name="c">
            </div>
                <div class="form-group">
                    <input value="<?php echo$received_pass;?>"  class="form-control" type="password" name="d">
                </div>
                <input type="submit"class="btn btn-outline-info btn-block"value="update"name="btn_register">

            <a href="users_.php"class="btn btn-outline-danger btn-block">Cancel</a>
        </form>
    </div>
</div>
</body>
</html>

