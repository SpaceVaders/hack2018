<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Space Vaders Scout</title>
	<link href="css/style_scout.css" rel="stylesheet" type="text/css">
</head>
<?php
	//start session and get array from session
	session_start();
	include('js/scout_functions.php');
	//symbol_array
	$symbol_array = array( 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'a', 'b', 'c', 'd', 'e');
	//get parameters from session
	$array = $_SESSION['array'];
	//speed of shadows
	$speed = $_SESSION['speed'];
	// end of session get
	//div id variable
	$div = 1;
	//set shadowed windows pos
	switch (mt_rand(0,4)) {
		case '0':
		$shadow_div_1 = 4;
		$shadow_div_2 = 5;
		$shadow_div_3 = 6;
		break;
		case '1':
		$shadow_div_1 = 4;
		$shadow_div_2 = 8;
		$shadow_div_3 = 9;
		break;
		case '2':
		$shadow_div_1 = 2;
		$shadow_div_2 = 3;
		$shadow_div_3 = 6;
		break;	
		case '3':
		$shadow_div_1 = 1;
		$shadow_div_2 = 3;
		$shadow_div_3 = 5;
		break;
		case '4':
		$shadow_div_1 = 1;
		$shadow_div_2 = 6;
		$shadow_div_3 = 7;
		break;	
		default:
		$shadow_div_1 = 4;
		$shadow_div_2 = 5;
		$shadow_div_3 = 6;
		break;
	}//end of switch
	//default:
	//$shadow_div_1 = 4;
	//$shadow_div_2 = 5;
	//$shadow_div_3 = 6;
	//!do not comment shadow_id!
	$shadow_id = 0;
	//store shadowed div's(element) in session
	$_SESSION['shadow_div_1'] = $shadow_div_1;
	$_SESSION['shadow_div_2'] = $shadow_div_2;
	$_SESSION['shadow_div_3'] = $shadow_div_3;
	//debug
		//print_r($array[0]);
		//echo count($array[0]);
		//var_dump($speed);
	//end of debug
?>
<body>
	<main class="wrapper">
		<div id="intercept">
			<h3> Decoding .....</h3>
			<table id="symbols">
			<h3> Recognized Symbols</h3>
				<tr>
					<?php 
						for($x=0; $x < 16; $x++){
							echo "<td>".($x+1)."</td>";
						}
					?>
				</tr>
				<tr>
					<?php 
						foreach($symbol_array as $value){
							echo '<td class="coded">'.$value."</td>";
						}
					?>
				</tr>

			</table>
		</div>
		<div>
			<h3>Code</h3>
		</div>
		<div id="secret">
			<!--draw secret -->
			<?php
			//get array from function scout_array_gen
			foreach($array[0] as $value){
				//shadowed cells
				if(($div == $shadow_div_1) || ($div == $shadow_div_2) || ($div == $shadow_div_3)){
				// generate html for shadowed cells and declare unique id
				echo '<div id="symbol_'.$div.'" class="shadow"'.'>'.'<span>'.$value.'</span>
				<div id="shadow_div_container_1">
					<div class="shadow_cell_11 spin'.($speed+1).'" id="shadow_'.$shadow_id;
					$shadow_id++;
					echo '"></div>
					<div class="shadow_cell_12 spin'.($speed-1).'" id="shadow_'.$shadow_id;
					$shadow_id++;
					echo '"></div>
					<div class="shadow_cell_13 spin'.$speed.'" id="shadow_'.$shadow_id;
					$shadow_id++;
					echo '"></div>
				</div>
				<div id="shadow_div_container_2 spin'.$speed.'">
					<div class="shadow_cell_21" id="shadow_'.$shadow_id;
					$shadow_id++;
					echo '"></div>
					<div class="shadow_cell_22 spin'.($speed+1).'" id="shadow_'.$shadow_id;
					$shadow_id++;
					echo '"></div>
					<div class="shadow_cell_23 spin'.($speed-1).'" id="shadow_'.$shadow_id;
					$shadow_id++;
					echo '"></div>
				</div>
				<div id="shadow_div_container_3">
					<div class="shadow_cell_31 spin'.($speed-1).'" id="shadow_'.$shadow_id;
					$shadow_id++;
					echo '"></div>
					<div class="shadow_cell_32 spin'.$speed.'" id="shadow_'.$shadow_id;
					$shadow_id++;
					echo '"></div>
					<div class="shadow_cell_33 spin'.$speed.'" id="shadow_'.$shadow_id;
					$shadow_id++;
					echo '"></div>
				</div>
				'.'</div>';
				}//end of shadow if
				//not shadowed cells
				else{
				echo '<div id="symbol_'.$div.'"'.'>'.'<span>'.$value.'</span></div>';
				}//end of shadow else
				$div++;
			}//end of foreach
			?>
		</div>
		<?php scout_shadow_gen(($_SESSION['expirience']));?>
		<!-- form -->
		<div>
		<!--target-->	
		<form id="answer" method="POST" action="scout_verification.php">
			<!--first symbol-->
			<fieldset id="radio_1">  
			<span> Please chose 1st symbol</span> 
				<ul>
    				<li>
    					<?php 
						foreach($symbol_array as $value){
							echo '<input type="radio" value="'.$value.'" id="1'.$value.'" name="radio1"/><label for="1'.$value.'">'.$value.'</label>';
						}
						?>	
    				</li>
				</ul>
			</fieldset>
			<!--second symbol-->
			<fieldset id="radio_2">
			<span> Please chose 2nd symbol</span> 
				<ul>
    				<li>
    					<?php 
						foreach($symbol_array as $value){
							echo '<input type="radio" value="'.$value.'" id="2'.$value.'" name="radio2"/><label for="2'.$value.'">'.$value.'</label>';
						}
						?>	
    				</li>
				</ul>
			</fieldset>	
			<!--third symbol-->
			<fieldset id="radio_3">
			<span> Please chose 3rd symbol</span> 
				<ul>
    				<li>
    					<?php 
						foreach($symbol_array as $value){
						echo '<input type="radio" value="'.$value.'" id="3'.$value.'" name="radio3" /><label for="3'.$value.'">'.$value.'</label>';
						}//end of foreach
						?>	
    				</li>
				</ul>
			</fieldset>
		<button class="btn btn-primary" type="submit" form="answer" value="Submit">Send Pattern</button>
		</form>
		</div>
	</main>
</body>
</html>