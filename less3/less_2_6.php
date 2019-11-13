<?php

$list = ['Home','About','Contact','pap','rap'];
echo'<ul>';
for($i=0;$i<=count($list);$i++){
    echo"<li>". $list[$i]. "</li>";
}
echo'</ul>';
?>