<?php
include('js/scout_functions.php');
session_start();
if($_SESSION['attempts'] < $_SESSION['maximum_attempts']){
	$_SESSION['attempts'] = (($_SESSION['attempts'])+1);
	$array = $_SESSION['array'];
	if(isset($_POST['radio1']) && isset($_POST['radio2']) && isset($_POST['radio3'])){
		$radio1 = ($_POST['radio1']);
		$radio2 = ($_POST['radio2']);
		$radio3 = ($_POST['radio3']);
		$arr_pos1 = $_SESSION['shadow_div_1']-1;
		$arr_pos2 = $_SESSION['shadow_div_2']-1;
		$arr_pos3 = $_SESSION['shadow_div_3']-1;
		if( $radio1 == $array[0][$arr_pos1] && $radio2 == $array[0][$arr_pos2] && $radio3 == $array[0][$arr_pos3]){
		echo "ok";
		}// if ok
		else{
		echo "wrong answer,".'<a href="scout.php" alt="link">try again</a>';
		}
	}//end of isset if
	else{
		echo "incomplete code".'<a href="scout.php" alt="link">try again</a>';
	}//end of isset else
}	
else{
	echo "no more attempts".'<a href="scout_start.php" alt="link">try again</a>';
}
?>