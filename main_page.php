<?php
session_start();
include('connect.php');
include './includes/header.php';
$user_id = $_SESSION['user_id'];
 $sql = "SELECT * FROM user_resources JOIN resources ON user_resources.resource_id=resources.id WHERE user_id='".$user_id ."'";
 $resource_result = mysqli_query($conn,$sql);
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
					<?php
						while ($row = mysqli_fetch_assoc($resource_result)) 
						{
							echo "<p>".$row['name'].':'.$row['res_value']. "</p>"
					?>	
					<?php
						}
					?>
				</div>
			</div>
		</div>
<!--SOLAR SYSTEAM 3D by Vaders ( logo, menu, player, info ) !-->
		<div id="universe">
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
		<div  style="display:none" id="pre_battle_section">
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
			<div class="battle_redirect"><span>Battle</span></div>
			<div id="scout" class="battle_redirect"><span>Scout</span></div>
			<div style="display: none;" id="max_cards"><p>MAX 3 CARDS!</p></div>
			<!-- CARD CHOOSING DIV -->
			<div id="cards_choose">
				<div id="card1">
					<?php
					 $query = "SELECT * FROM player_decks JOIN cards ON player_decks.card_id=cards.id WHERE user_id ='".$user_id."' ";
					 $result = mysqli_query($conn,$query);
					 $logo ="SELECT logo FROM planets WHERE id = '1'";
					 $logo_res= mysqli_query($conn,$logo);
					 $logo_row = mysqli_fetch_assoc($logo_res);
					 while ($row = mysqli_fetch_assoc($result)) 
					 {
					 	?>
					<div class="human_card">
						<span style="display: none;"><?php echo $row['card_id'];?></span>
						<div style="background-image: url(img/<?php echo $row['picture'];?>);" class="human_image" >
							<div class="card_type">
								<img src="img/<?php echo $logo_row['logo'] ?>">
							</div>
							<div class="motto"><?php echo $row['description'];?></div>
						</div>
						<div class="human_info" >
							<div class="human_attack"><p><span><?php echo $row['upg_card_att']?></span>Attack</p></div>
							<div class="human_defense" ><p><span><?php echo $row['upg_card_def'];?></span>Defense</p></div>
							<div class="human_name" ><h3><?php echo $row['name'];?></h3></div>
						</div>
					</div>
					 	<?php
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