<?php
require_once 'db.php';
print_r($_FILES);
$imgname = $_FILES['image']['name'];
$imgsize = $_FILES['image']['size'];
$img = "img/".$imgname;
$add = mysqli_query($db,"INSERT INTO `photo` (`name`,`size`,`src`) VALUES ('$imgname','$imgsize','$img')");
copy($_FILES['image']['tmp_name'],$img);
header('Location:http://localhost/php_homework/less5/index.php')
?>