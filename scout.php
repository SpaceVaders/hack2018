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
	//get parameters from session
	$array = $_SESSION['array'];
	//speed of shadows
	$speed = $_SESSION['speed'];
	// end of session get
	//div id variable
	$div = 1;
	//shadowed div's id
	$shadow_div_1 = 4;
	$shadow_div_2 = 5;
	$shadow_div_3 = 6;
	$shadow_id = 0;
	//debug
		//print_r($array[0]);
		//echo count($array[0]);
		//var_dump($speed);
	//end of debug
?>
<body>
	<main class="wrapper">
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
	</main>
	<!--<script
			  src="http://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
	<script type="text/javascript">
    $(document).ready(function ajaxCall() {
        var time = 50000;
        $.ajax({
                url: "js/refresh.php",
                success: function( response ) {
                    console.log(response);
                    var counter=1;
                   $.each(JSON.parse(response), function (index, value) {
        console.log(value);
        $('#shadow_'+counter).attr('id', 'shadow_'+value).css(' opacity: 0.1');
        counter++;
});
                }
        });
        setInterval(ajaxCall, time);   
    });           
</script>
-->
</body>
</html>