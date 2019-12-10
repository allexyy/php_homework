<?php
require 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Image</title>
</head>
<body>
<?php
echo "<img src='img/".$_GET['name']."' alt=''>";

?>
</body>
</html>