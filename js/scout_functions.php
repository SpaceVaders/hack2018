<!-- Scout quiz functions-->
<?php
	//generate random array for quiz
	function scout_array_gen($num_of_symbols = 10){
		$arr;
		for($i = 0; $i < $num_of_symbols; $i++){
			$arr[$i] = mt_rand(0,10);
		}//end of for
	return array($arr);
	}//end of function array gen

	//function gameplay
	function scout_judge($arr, $unit_point = 5, $plannet = 1, $time = 60, $blink = 5 ){



	}//end of function plannet
	function scout_shadow_gen($exp = 1){
		var_dump($exp);
		switch($exp){
		case '1':	
			do{
				$a = mt_rand(0,26);
				$b = mt_rand(0,26);
				$c = mt_rand(0,26);
				$d = mt_rand(0,26);
			}
			while(in_array($a, array($b, $c ,$d)) && in_array($b, array($a, $c ,$d)) && in_array($c, array($b, $a ,$d)) && in_array($d, array($b, $c ,$a))) ;
			//echo $a." ".$b." ".$c." ".$d;
			echo '<style>#shadow_'.$a.'{ opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$b.' { opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$c.' { opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$d.' { opacity: 0.1;}</style>';
			break;
		case '2':	
			do{
				$a = mt_rand(0,26);
				$b = mt_rand(0,26);
				$c = mt_rand(0,26);
				$d = mt_rand(0,26);
				$e = mt_rand(0,26);
			}
			while(in_array($a, array($b, $c , $d, $e)) && in_array($b, array($a, $c , $d ,$e)) && in_array($c, array($b, $a , $d, $e)) && in_array($d, array($b, $c , $a, $e)) && in_array($e, array($b, $c , $a, $d))	
				);
			//echo $a." ".$b." ".$c." ".$d;
			echo '<style>#shadow_'.$a.'{ opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$b.' { opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$c.' { opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$d.' { opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$e.' { opacity: 0.1;}</style>';
			break;
		case '3':	
			do{
				$a = mt_rand(0,26);
				$b = mt_rand(0,26);
				$c = mt_rand(0,26);
				$d = mt_rand(0,26);
				$e = mt_rand(0,26);
				$f = mt_rand(0,26);
			}
			while(in_array($a, array($b, $c , $d, $e, $f)) && in_array($b, array($a, $c , $d ,$e ,$f)) && in_array($c, array($b, $a , $d, $e, $f)) && in_array($d, array($b, $c , $a, $e, $f)) && in_array($e, array($b, $c , $a, $d, $f)) && in_array($f, array($b, $c , $a, $d, $e))		
				);
			//echo $a." ".$b." ".$c." ".$d;
			echo '<style>#shadow_'.$a.'{ opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$b.' { opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$c.' { opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$d.' { opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$e.' { opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$f.' { opacity: 0.1;}</style>';
			break;
		case '4':	
			do{
				$a = mt_rand(0,26);
				$b = mt_rand(0,26);
				$c = mt_rand(0,26);
				$d = mt_rand(0,26);
				$e = mt_rand(0,26);
				$f = mt_rand(0,26);
				$g = mt_rand(0,26);
			}
			while(in_array($a, array($b, $c , $d, $e, $f, $g)) && in_array($b, array($a, $c , $d , $e, $f ,$g)) && in_array($c, array($b, $a , $d, $e, $f, $g)) && in_array($d, array($b, $c , $a, $e, $f, $g)) && in_array($e, array($b, $c , $a, $d, $f, $g)) && in_array($f, array($b, $c , $a, $d, $e, $g)) &&
				in_array($g, array($b, $c , $a, $d, $f, $e))		
				);
			//echo $a." ".$b." ".$c." ".$d;
			echo '<style>#shadow_'.$a.'{ opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$b.' { opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$c.' { opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$d.' { opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$e.' { opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$f.' { opacity: 0.1;}</style>';
			echo '<style>#shadow_'.$g.' { opacity: 0.1;}</style>';
			break;
		}//end of dific switch	
	}//end of function test me
	
?>