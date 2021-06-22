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

			if($product['pro_desconto'] <= 0 ){
				$com_desc = $cart[$product['pro_id']] * $product['pro_valor'];
			}
			else
			{$com_desc = $cart[$product['pro_id']] * $product['pro_valor_venda'];}

			$results[] = array(
							  'id' => $product['pro_id'],
							  'name' => $product['pro_nome'],
							  'image' => $product['pro_img'],
							  'porc' => $product['pro_porc_desconto'],
							  'price' => $product['pro_valor'],
							  'discount' => $product['pro_desconto'],
							  'discount2' => $cart[$product['pro_id']] * $product['pro_valor'],
							  'quantity' => $cart[$product['pro_id']],
							  'subtotal' => $com_desc,
						);
		}
	}
	
	return $results;
}

function conta_produtos($pdo) {
	
	$cont_itens = 0;
	$results = array();
	
	if($_SESSION['carrinho']) {
		
		$cart = $_SESSION['carrinho'];
		$products =  getProductsByIds($pdo, implode(',', array_keys($cart)));

		foreach($products as $product) {
			$cont_itens = $cont_itens + 1;			
		}
	}
	
	return $cont_itens;
}

function getTotalCart($pdo) {
	
	$total = 0;

	foreach(getContentCart($pdo) as $product) {
		$total += $product['subtotal'];
	} 
	return $total;
}

function getTotalfrete($pdo) {
	$frete = 6;
	$total = 0;

	foreach(getContentCart($pdo) as $product) {
		$total += $product['subtotal'];
	}
	if($total >100){
		$frete = 0;		
		return $total;
	}
	if($total == 0){
		$frete = 0;
		$total = $total + $frete;
		return $total;
	}
	else{
		$total = $total + $frete;
		return $total;
	}	
}

function getfrete($pdo) {
	$frete = 0;
	$total = 0;

	foreach(getContentCart($pdo) as $product) {
		$total += $product['subtotal'];
	}
	if($total >100){
		$frete = 0;		
		return $frete;
	}
	if($total == 0){		
		$frete = 0;
		return $frete;
	}
	else{
		$frete = 6;
		return $frete;
	}	
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