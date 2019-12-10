<?php
$dir = opendir('img');
$count = 0;
while($file = readdir($dir)){
    if($file == '.' || $file == '..' || is_dir('img' . $file)){
        continue;
    }
    echo "<a href='imgpage.php?&name=".basename($file)."'><img width='250px'height='175px' src=img/".basename($file)." alt='grapefruit'></a>";
    $count++;
}
?>