<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

</head>
<body>
	<?php
	include('js/scout_functions.php');
	//start session
	session_start();	
	//initial parameters
	//scout level (time to solve quiz)
	$scout_level = 4;
	//set scout expirience 1-4. scount visible cells;
	$scout_expirience = 4; 
	//set planet difficulty range 1-5 . hidden cell animation speed 1-5
	$plannet_difficulty = 4;
	//set maximum attempts
	$maximum_attempts = 3;
	//generate array;
	$array = scout_array_gen(10);
	//sent parameters via session
	$_SESSION['array'] = $array; 
	$_SESSION['speed'] = $plannet_difficulty;
	$_SESSION['expirience'] = $scout_expirience;
	$_SESSION['maximum_attempts'] = $maximum_attempts;
	$_SESSION['attempts'] = 0;
	?>
	<a href="scout.php" alt="start searching">Go</a>
</body>
</html>