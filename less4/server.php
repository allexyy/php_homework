<?php
$img = "img/".$_FILES['image']['name'];
copy($_FILES['image']['tmp_name'],$img);
?>