<?php session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LogIn</title>
</head>
<body>
    <?php
    if(isset($_SESSION['login']) && isset($_SESSION['pass'])){
        header('Location:showprod.php');
    }
    else{
        require_once 'loginpage.php';
    }
    ?>
</body>
</html>