<?php 
		do{
		$a = mt_rand(0,26);
		$b = mt_rand(0,26);
		$c = mt_rand(0,26);
		$d = mt_rand(0,26);
		$e = mt_rand(0,26);
		$f = mt_rand(0,26);

		}
		//while{$a != $b && $a != $c && $a != $d && $a != $b && $a != $c && $a
		while(in_array($a, array($b, $c ,$d)) && in_array($b, array($a, $c ,$d)) && in_array($c, array($b, $a ,$d)) && in_array($d, array($b, $c ,$a))) ;
		echo $a." ".$b." ".$c." ".$d;
		echo '<style>#shadow_'.$a.'{ opacity: 0.1;}</style>';
		echo '<style>#shadow_'.$b.' { opacity: 0.1;}</style>';
		echo '<style>#shadow_'.$c.' { opacity: 0.1;}</style>';
		echo '<style>#shadow_'.$d.' { opacity: 0.1;}</style>';

		//print_r(json_encode([$a,$b,$c,$d,$e,$f]));
	?>