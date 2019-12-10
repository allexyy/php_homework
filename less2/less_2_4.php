<?php
$h = date('h');
$m = date('i');
  function plur ( $num, $type1, $type2, $type3 ) {
		$num_end = $num % 10; // Последняя цифра
		if ( $num >= 11 && $num <= 14 )		return $num.' '.$type2; 
		if ( $num_end >= 2 && $num_end <= 4 )	return $num.' '.$type3; 
		if ( $num == 1 || $num_end == 1 )  	return $num.' '.$type1; 
		if ( $num >= 2 && $num <= 4 )		return $num.' '.$type3; 
							return $num.' '.$type2; 
	}
 
    echo plur( $h, 'Час', 'Часов', 'Часа' );
    echo plur( $m, 'Минута', 'Минут', 'Минуты' );
?>
