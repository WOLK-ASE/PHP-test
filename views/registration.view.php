<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<!--header-->
<?php require "./blocks/header.php" ?>
<!--header-->
<?php reg_check(); ?>
<div class="container mt-20">
    <h3 class="text-center">Registration form</h3>
    <form class="reg-form" action="../registration.php" method="post">
        <p>
            <strong>Enter your name</strong>
            <input type="text" name="name" placeholder="Enter name" class="form-control">
        </p>
        <p>
            <strong>Enter your surname</strong>
            <input type="text" name="surname" placeholder="Enter surname" class="form-control">
        </p>
        <p>
            <strong>Enter your e-mail</strong>
            <input type="email" name="mail" placeholder="Enter e-mail" class="form-control">
        </p>
        <p>
            <strong>Enter your password</strong>
            <input type="password" name="password" placeholder="Enter password" class="form-control">
        </p>
        <p>
            <strong>Reply your password</strong>
            <input type="password" name="password_2" placeholder="Enter password" class="form-control">
        </p>
        <button type="submit" name="send" class="btn btn-primary">Register</button>
    </form>
</div>

<!--footer-->
<?php require "./blocks/footer.php" ?>
<!--footer-->

</body>
</html>
