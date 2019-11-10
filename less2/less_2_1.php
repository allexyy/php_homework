<?php
//USE GMP(un-comment in php.ini)
$a = rand(-3,5);
$b = rand(-3,5);
echo ("$a , $b...");

if(gmp_sign($a)==1 && gmp_sign($b)==1){
    echo $a-$b;
}
elseif (gmp_sign($a)==-1 && gmp_sign($b)==-1) {
    echo $a*$b;
}
elseif(gmp_sign($a)!= gmp_sign($b)){
    echo $a+$b;
}

?>