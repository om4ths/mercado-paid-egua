<?php 

if(!isset($_SESSION['carrinho'])) {
	$_SESSION['carrinho'] = array();
}

function addCart($id, $quantity) {
	if(!isset($_SESSION['carrinho'][$id])){ 
		$_SESSION['carrinho'][$id] = $quantity; 
	}
}

function deleteCart($id) {
	if(isset($_SESSION['carrinho'][$id])){ 
		unset($_SESSION['carrinho'][$id]); 
	} 
}

function updateCart($id, $quantity) {
	if(isset($_SESSION['carrinho'][$id])){ 
		if($quantity > 0) {
			$_SESSION['carrinho'][$id] = $quantity;
		} else {
		 	deleteCart($id);
		}
	}
}

function getContentCart($pdo) {
	
	$results = array();
	
	if($_SESSION['carrinho']) {
		
		$cart = $_SESSION['carrinho'];
		$products =  getProductsByIds($pdo, implode(',', array_keys($cart)));

		foreach($products as $product) {

			$results[] = array(
							  'id' => $product['pro_id'],
							  'name' => $product['pro_nome'],
							  'image' => $product['pro_img'],
							  'porc' => $product['pro_porc_desconto'],
							  'price' => $product['pro_valor'],
							  'discount' => $product['pro_desconto'],
							  'discount2' => $cart[$product['pro_id']] * $product['pro_valor'],
							  'quantity' => $cart[$product['pro_id']],
							  'subtotal' => $cart[$product['pro_id']] * $product['pro_valor_venda'],
						);
		}
	}
	
	return $results;
}

function getTotalCart($pdo) {
	
	$total = 0;

	foreach(getContentCart($pdo) as $product) {
		$total += $product['subtotal'];
	} 
	return $total;
}

function getTotalfrete($pdo) {
	$frete = 5;
	$total = 0;

	foreach(getContentCart($pdo) as $product) {
		$total += $product['subtotal'];
	} 
	$total = $total + $frete;
	return $total;
}

function getTotaldesc($pdo) {
	$desc = 0;
	$total = 0;

	foreach(getContentCart($pdo) as $product) {
		$total += $product['subtotal'];
		$desc += $product['discount2'];
	} 
	$total = $desc - $total;
	return $total;
}