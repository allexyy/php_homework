<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Gallerey</title>
</head>
<body>
    
</body>
</html>
<form action="server.php" method="POST" enctype='multipart/form-data'>
<p>Load image</p>
<input type="file" name="image" accept="image/jpeg">
<button class='btn btn-primary' type="submit">Let's go</button>
</form>
<?php
include_once "loadimage.php";
?>