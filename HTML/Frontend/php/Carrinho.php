<?php 

	require_once "verificar_login.php";

	require_once "functions/product.php";
	require_once "functions/cart.php";

	$pdoConnection = require_once "connection.php";

	if(isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {
		
		if($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			addCart($_GET['id'], $_GET['quant']);
						
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
	$cont_itens = conta_produtos($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);
	$totalCfrete  = getTotalfrete($pdoConnection);
	$totaldesc  = getTotaldesc($pdoConnection);
	$frete = getfrete($pdoConnection);

?>
