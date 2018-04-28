<?php
session_start();
include('connect.php');
/*$_SESSION['username'];*/
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
					<h2>Hello <span>User</span>!</h2>
					<p>Energy:</p>
					<p>Metal:</p>
				</div>
			</div>
		</div>
<!--SOLAR SYSTEAM 3D by Vaders ( logo, menu, player, info ) !-->
		<div id="universe">
			<div id="galaxy">

        	<div id="sun_3d"></div>
	        
	        <div  class="orbit orbit_mercury">
	            <div class="pos" id="pos_mercury">
	            	<div class="planet" id="mercury_3d"></div>
	         	</div>
	        </div>
        	 <div class="orbit orbit_venus">
	            <div class="pos" id="pos_venus">
	            	<div class="planet" id="venus_3d"></div>
	         	</div>
	        </div>
	        <div class="orbit orbit_earth">
	            <div class="pos" id="pos_earth">
	            	<div class="planet" id="earth_3d"></div>
	         	</div>
	        </div>
	        <div class="orbit orbit_jupiter">
	            <div class="pos" id="pos_jupiter">
	            	<div class="planet" id="jupiter_3d"></div>
	         	</div>
	        </div>
	        <div class="orbit orbit_saturn">
	            <div class="pos" id="pos_saturn">
	            	<div class="planet" id="saturn_3d"></div>
	         	</div>
	        </div>
	        <div class="orbit orbit_uranus">
	            <div class="pos" id="pos_uranus">
	            	<div class="planet" id="uranus_3d"></div>
	         	</div>
	        </div>
	         <div class="orbit orbit_neptune">
	            <div class="pos" id="pos_neptune">
	            	<div class="planet" id="neptune_3d"></div>
	         	</div>
	        </div>
      	   </div>
		</div>
	</div>
	<script type="text/javascript" src="js/pre_battle.js">
		
	</script>
<?php
 include'./includes/footer.php'; 
?>