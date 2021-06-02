<?php
		session_start();
		$email_id = $_SESSION['email'];	
		if(!$_SESSION['email']) {					
			header('Location: login.html');
			exit();
			}
		?>