<?php
$first=$_GET['first'];
$second=$_GET['second'];
$operation=$_GET['operation'];
function calc($a,$b,$c){
    if($c=='+'){
        echo $a+$b;
    }
    elseif($c=='-'){
        echo $a-$c;
    }
    elseif($c=='*'){
        echo $a*$b;
    }
    elseif($c=='/'&&$c!=0){
        echo $a/$b;
    }
    else{
        echo 'На ноль делить нельзя';
    }
}
calc($first,$second,$operation);
?>