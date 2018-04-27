<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Space Vaders Scout</title>
	<link href="css/style_scout.css" rel="stylesheet" type="text/css">
</head>
<?php
	include('js/scout_functions.php');
	$array = scout_array_gen(10);
	//div id variable
	$div = 1;
	//shadowed div's id
	$shadow_div_1 = 4;
	$shadow_div_2 = 5;
	$shadow_div_3 = 6;
	//debug
	print_r($array[0]);
	echo count($array[0]);
?>
<body>
	<main class="wrapper">
		<div id="secret">
			<!--draw secret -->
			<?php
			foreach($array[0] as $value){
				if(($div == $shadow_div_1) || ($div == $shadow_div_2) || ($div == $shadow_div_3)){
				echo '<div id="symbol_'.$div.'" class="shadow"'.'>'.'<span>'.$value.'</span>
				<div id="shadow_div_container_1">
					<div id="shadow_cell_11"></div>
					<div id="shadow_cell_12"></div>
					<div id="shadow_cell_13"></div>
				</div>
				<div id="shadow_div_container_2">
					<div id="shadow_cell_21"></div>
					<div id="shadow_cell_22"></div>
					<div id="shadow_cell_23"></div>
				</div>
				<div id="shadow_div_container_3">
					<div id="shadow_cell_31"></div>
					<div id="shadow_cell_32"></div>
					<div id="shadow_cell_33"></div>
				</div>
				'.'</div>';
				}//end of shadow if
				else{
				echo '<div id="symbol_'.$div.'"'.'>'.'<span>'.$value.'</span></div>';
				}//end of shadow else
				$div++;
			}//end of foreach
			?>
		</div>
	</main>
</body>
</html>