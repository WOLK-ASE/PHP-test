<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php require_once  "./connection.php" ?>
<!--header-->
<?php require "./blocks/header.php" ?>
<!--header-->

<!--container-->
<div class="container mt-5">

    <!--        posts-->
    <h3>Our posts</h3>
    <div class="d-flex flex-wrap">
<?php
        $answer = mysqli_query($connect, "select * from test");
        $rows = array();
        while($row = mysqli_fetch_array($answer))
            $rows[] = $row;

        for($i = 0; $i < 6; $i++):?>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><?php
                        echo $rows[$i]["Fruit"];
                        ?></h4>
                </div>
                <div class="card-body">
                    <img src="./img/<?php echo ($i + 1) ?>.png" alt="img-thumbnail">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><?php
                            echo $rows[$i]["Fruit"];
                        ?>
                        </li>
                        <li><?php
                            echo $rows[$i]["Colour"];
                            ?>
                        </li>
                        <li><?php
                            echo $rows[$i]["Price"];
                            ?>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">More</button>
                </div>
            </div>
        <?php endfor; ?>
    </div>
    <!--        posts-->
</div>
<!--container-->


<!--footer-->
<?php require "./blocks/footer.php" ?>
<!--footer-->
</body>
</html>