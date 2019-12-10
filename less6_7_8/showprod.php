<?php
require_once 'db.php';
session_start();

$prod_name=mysqli_query($db,"SELECT * FROM product");
while($data = mysqli_fetch_array($prod_name)){
    echo "<h3>".$data['name']."</h3>";
    echo "<a href=prodpage.php?&name=".$data['name']."&desc=".$data['description']."&img=".$data['img_path']."><img width='200px'border='1px solid black' height='200px' src='".$data['img_path']."' alt='".$data['name']."'></a>";
    echo "<label>".$data['small_desc']."</label>";

}
?>