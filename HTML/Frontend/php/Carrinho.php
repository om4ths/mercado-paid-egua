<?php 
<<<<<<< HEAD

	require_once "verificar_login.php";
=======
		session_start();
>>>>>>> 19b7fadf6f17d462653301b03bb05130e6dcc508

	require_once "functions/product.php";
	require_once "functions/cart.php";

	$pdoConnection = require_once "connection.php";

	if(isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {
		
		if($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			addCart($_GET['id'], 1);
						
		}

		if($_GET['acao'] == 'del' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			deleteCart($_GET['id']);
		}

		if($_GET['acao'] == 'up'){ 
			if(isset($_POST['prod']) && is_array($_POST['prod'])){ 
				foreach($_POST['prod'] as $id => $qtd){
						updateCart($id, $qtd);
				}
			}
		}

		
		header('location: ../index.php');
		
	}

	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);


?>
