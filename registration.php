
<?php

$database = require "./bootstrap.php";

$name = $_POST['name'];

$surname = $_POST['surname'];

$mail = $_POST['mail'];

$password = $_POST['password'];

$password_2 = $_POST['password_2'];

function reg_check ()
{
    if( isset($_POST['send'])) {

        $errors = array();
        if ( trim($name) == '')
        {
            $errors[] = 'You Must enter your name!';
        }
        if ( trim($surname) == '')
        {
            $errors[] = 'You Must enter your surname!';
        }
        if ( trim($mail) == '')
        {
            $errors[] = 'You Must enter your mail!';
        }
        if ( ($password) == '')
        {
            $errors[] = 'You Must enter your password!';
        }
        if ( ($password_2) != $password)
        {
            $errors[] = 'Passwords doesn\'t match! ';
        }
        if ( empty($errors))
        {
            $database->newUser($name, $surname, $mail, $password);
        }
        else
        {
            echo '<div class="text-center" style="color:red; font-size: 30px ">'.array_shift($errors).'</div><hr>';
        }
    }
}

require "./views/registration.view.php";