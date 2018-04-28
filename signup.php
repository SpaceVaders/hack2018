<?php
	session_start();
	include('connect.php');
	if(isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['pass_confirm']) && isset($_POST['race'])){

		$user= $_POST['user'];
		$pass= $_POST['pass'];
		$pass_confirm= $_POST['pass_confirm'];
		$race= $_POST['race'];
		$passlen=strlen($pass);
		$containsLetter  = preg_match('/[a-zA-Z]/', $pass);
		$containsDigit   = preg_match('/\d/', $pass);

		if($pass = $pass_confirm){
			if($passlen<6 || $passlen>16){
				echo 'The password that you have given is not valid.';
		        echo '<p></p>';
				echo '<a href="signup_login.php">Go Back</a>';
			}else{
				if ($containsLetter && $containsDigit){
		        	$sql= mysqli_query($conn, "SELECT username  FROM users WHERE username = '".$user."'");
					if(mysqli_num_rows($sql)>=1){
			    		echo"username already exists";
			    		echo '<p></p>';
						echo '<a href="signup_login.php">Go Back</a>';
			   		}else{
			   			$hashed_pass = crypt($pass);
			   			$query = "INSERT into users (username, password, race) VALUES ('".$user."','".$hashed_pass."','".$race."')";
						mysqli_query($conn, $query);
						header("Location:signup_login.php");
			   		}
		        }else{
		        	echo 'The password that you have given is not valid.';
		        	echo '<p></p>';
					echo '<a href="signup_login.php">Go Back</a>';
		        }
		    }
		}else{
			echo"the passwords are not matching";
			echo '<p></p>';
			echo '<a href="signup_login.php">Go Back</a>';
		}
	}else{
		echo 'You havent filled all the boxes';
	}
	

