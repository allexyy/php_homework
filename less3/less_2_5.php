<?php
$str = 'Hi pie sd dsdasadsdahfj  NNKNKkjd';

for($i=0;$i<=strlen($str);$i++){
    if($str[$i] == ' '){
        $str[$i]='_';
    }
}
echo $str;

//Or str_replace(' ','_',$str);


?>