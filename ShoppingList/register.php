<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h1 class="text-info text-center">Register here</h1>
        <form action="register_handler.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control"placeholder="Enter name"name="x">
            </div>
            <div class="form-group">
                <input type="e-mail" class="form-control"placeholder="Enter email"name="y">
            </div>
            <div class="form-group">
                <input type="password" class="form-control"placeholder="Enter password"name="z">
                <input type="submit"class="btn btn-outline-info btn-block"value="register"name="btn_register">
            </div>
            <a href="users_.php"class="btn btn-outline-success btn-block">View all</a>
        </form>
    </div>
