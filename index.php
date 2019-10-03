
<?php
$database = require "./bootstrap.php";

$fruits = $database->selectAll('test');

require 'index.view.php';







