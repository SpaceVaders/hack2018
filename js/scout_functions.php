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
	function scout_judge($arr, $unit_point, $plannet, $answer){


	}//end of function plannet

?>