<?php
$dir = opendir('img');
$count = 0;
while($file = readdir($dir)){
    if($file == '.' || $file == '..' || is_dir('img' . $file)){
        continue;
    }
    echo "<img width='250px' src=img/".basename($file)." alt='grapefruit'>";
    $count++;
}
?>