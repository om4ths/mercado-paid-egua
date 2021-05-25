<?php
		session_start();
		if(!$_SESSION['telefone']) {
			header('Location: sign_in.html');
			exit();
			}
		?>