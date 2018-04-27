<?php
    session_start();
    include('connect.php');
    $query = "SELECT * from cards";
	mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>game</title>
</head>
<body>
	<div class="human_card">
		<div class="human_image" >
			<div class="card_type">
				<img src="human_symbol.svg">
			</div>
			<div class="motto">"Made of iron."</div>
		</div>
		<div class="human_info" >
			<div class="human_attack"><p><span>5</span>Attack</p></div>
			<div class="human_defense" ><p><span>5</span>Defense</p></div>
			<div class="human_name" ><h3>CardName</h3></div>
		</div>
	</div>
</body>
</html>