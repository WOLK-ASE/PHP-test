<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<!--header-->
<?php require "./blocks/header.php" ?>
<!--header-->

    <div class="container">
        <h3>Contact form</h3>
        <form action="check.php" method="post">
            <input type="email" name="email" placeholder="Enter E-mail" class="form-control"><br>
            <textarea name="message" class="form-control" placeholder="Enter your message" cols="30" rows="10"></textarea><br>
            <button type="submit" name="send" class="btn btn-success">Submit</button>
        </form>
    </div>



<!--footer-->
<?php require "./blocks/footer.php" ?>
<!--footer-->
</body>
</html>
