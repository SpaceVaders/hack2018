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
	$scout_level = 5;
	//set scout expirience;
	$scout_expirience = 2;
	//set planet difficulty range 1-5
	$plannet_difficulty = 3;
	//generate array
	$array = scout_array_gen(10);
	//sent parameters via session
	$_SESSION['array'] = $array; 
	$_SESSION['speed'] = $plannet_difficulty;
	$_SESSION['expirience'] = $scout_expirience;
	var_dump($_SESSION['speed']);
	?>
	<a href="scout.php" alt="start searching">Go</a>
</body>
</html>