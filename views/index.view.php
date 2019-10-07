<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<!--header-->
<?php require "./blocks/header.php" ?>
<!--header-->
<!--container-->
<div class="container mt-5">

    <!--        posts-->
    <h2 class="text-center">Fruits</h2><br>
    <div class="d-flex flex-wrap">
        <?php
        $i=0;
        foreach ($fruits as $fruit):?>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><?= $fruit->Fruit; ?></h4>
                </div>
                <div class="card-body">
                    <img style="height: 150px; width: 100%" src="./img/<?php echo (++$i) ?>.jpg" alt="img-thumbnail">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li><strong>Name - </strong><?= $fruit->Fruit;?>
                        </li>
                        <li><strong>Colour - </strong><?= $fruit->Colour; ?>
                        </li>
                        <li><strong>Price - </strong><?= $fruit->Price; ?>$
                        </li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">More</button>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <!--        posts-->
</div>
<!--container-->


<!--footer-->
<?php require "./blocks/footer.php" ?>
<!--footer-->
</body>
</html>
