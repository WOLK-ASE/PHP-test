
<?php
$database = require "./bootstrap.php";

$fruits = $database->selectAll('test');

require './views/index.view.php';







