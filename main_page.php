<?php
session_start();
include('connect.php');
include './includes/header.php';
?>
<!--HEADER ( logo, menu, player, info ) !-->

	<div id='mp_container'>
		<div id="mp_header">
			<div id="mp_logo"><img src="img/SpaceVaders2.png"></div>
			<div id='mp_menu'>
				<div id='mp_ul_menu'>
					<ul>
						<li ><a href="#">Standings</a></li>
						<li  ><a href="#">Profile</a></li>
						<li ><a href="#">Scout</a></li>
						<li ><a href="#">Diary</a></li>
					</ul>
				</div>
				<div id="player_info">
					<h2>Hello <span></span><?php echo $_SESSION['username'];?></span>!</h2>
					<p>Energy:</p>
					<p>Metal:</p>
				</div>
			</div>
		</div>
<!--SOLAR SYSTEAM 3D by Vaders ( logo, menu, player, info ) !-->
		<div style="display:none"  id="universe">
			<div id="galaxy">

        	<div id="sun_3d"></div>
	        
	        <div  class="orbit orbit_mercury">
	            <div class="pos" id="pos_mercury">
	            	<div class="mp_planet" id="mercury_3d"></div>
	         	</div>
	        </div>
        	 <div class="orbit orbit_venus">
	            <div class="pos" id="pos_venus">
	            	<div class="mp_planet" id="venus_3d"></div>
	         	</div>
	        </div>
	        <div class="orbit orbit_earth">
	            <div class="pos" id="pos_earth">
	            	<div class="mp_planet" id="earth_3d"></div>
	         	</div>
	        </div>
	        <div class="orbit orbit_jupiter">
	            <div class="pos" id="pos_jupiter">
	            	<div class="mp_planet" id="jupiter_3d"></div>
	         	</div>
	        </div>
	        <div class="orbit orbit_saturn">
	            <div class="pos" id="pos_saturn">
	            	<div class="mp_planet" id="saturn_3d"></div>
	         	</div>
	        </div>
	        <div class="orbit orbit_uranus">
	            <div class="pos" id="pos_uranus">
	            	<div class="mp_planet" id="uranus_3d"></div>
	         	</div>
	        </div>
	         <div class="orbit orbit_neptune">
	            <div class="pos" id="pos_neptune">
	            	<div class="mp_planet" id="neptune_3d"></div>
	         	</div>
	        </div>
      	   </div>
		</div>
		<!--HIDDEN PLANETS EFFECT JAVASCRIPT -->
		<div id="pre_battle_section">
			<div style="display:none" class="planet_mercury" id="mercury_outside">
				<div id="mercury_inside"></div>
			</div>

			<div style="display:none" class="planet_earth" id="earth_outside">
				<div id="earth_inside"></div>
			</div>

			<div style="display:none" class="planet_jupiter" id="jupiter_outside">
				<div id="jupiter_inside"></div>
			</div>

			<div style="display:none" class="planet_mars" id="mars_outside">
				<div id="mars_inside"></div>
			</div>

			<div style="display:none" class="planet_neptune" id="neptune_outside">
				<div id="neptune_inside"></div>
			</div>

			<div style="display:none" class="planet_saturn" id="saturn_outside">
				<div id="saturn_inside"></div>
			</div>

			<div style="display:none" class="planet_uranus" id="uranus_outside">
				<div id="uranus_inside"></div>
			</div>

			<div style="display:none" class="planet_venus" id="venus_outside">
				<div id="venus_inside"></div>
			</div>
			<div id="battle_redirect"><span>Battle</span></div>
			<!-- CARD CHOOSING DIV -->
			<div id="cards_choose">
				<div id="card1">
					<?php
					 $user_id = $_SESSION['user_id'];
					 $query = "SELECT * FROM player_decks JOIN cards ON player_decks.card_id=cards.id WHERE user_id = 1";
					 $result = mysqli_query($conn,$query);
					 while ($row = mysqli_fetch_assoc($result)) 
					 {
					 	echo "<pre>";
					 	var_dump($row);
					 	echo "</pre>";
					 }
					 
					?>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/pre_battle.js">
		
	</script>
<?php
 include'./includes/footer.php'; 
?>