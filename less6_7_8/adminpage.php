<?php
require_once 'db.php';
session_start();
if($_SESSION['role']==1){
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
</head>
<body>
    <p>Name</p>
    <input type="text" name="name" id="">
    <p>Description</p>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <input type="file" name="image" id="">
    <button type="submit">Go</button>
</body>
</html>
<?php
}
else{
    header('Location:showprod.php');
}
?>