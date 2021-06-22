<?php 
include('func.php');
include("carrinho.php");
include("conexao.php");

$id_cliente = $_SESSION['telefone'];
$id_pedido = random_int(1, 9999) ;
$data_entrega = $_GET['dia_entrega'];
$hora_entrega = $_GET['hora_entrega'];
$status_p = $_GET['status'];

if($_GET['pagamento']){

$pagamento = $_GET['pagamento'];


if($_GET['id_end']){
$id_end = $_GET['id_end'];

$valor_total = number_format($totalCfrete, 2, ',', '.');
$frete = $frete; //falta
$valor_total_desc = number_format($totaldesc, 2, ',', '.'); //falta
$total_prod = number_format($totalCarts, 2, ',', '.');


if($resultsCarts){
foreach($resultsCarts as $result) : 

$data_entrega = implode('-', array_reverse(explode('/', $data_entrega)));
$id_produto = $result['id'];
$quantidade = $result['quantity'];
$desconto = $result['discount'];
$valor_p_s_desc= $result['price'];



$query = "INSERT INTO pedidos (pedido_id,  ped_status, produto_id ,   cliente_id , valor_frete, valor_total_desconto , valor_sem_desconto , quantidade , total_produtos, valor_total_pro,  valor_pedido ,   metodo_pagamento , data_entrega, hora_entrega, id_endereco)
                    VALUES ( '$id_pedido','$status_p' ,'$id_produto', '$id_cliente', '$frete', '$valor_total_desc' , '$valor_p_s_desc' , '$quantidade', '$total_prod',  '$valor_total',  '$desconto',     '$pagamento',    '$data_entrega', '$hora_entrega', '$id_end')";


    $insert = mysqli_query($conexao,$query);

    
     

endforeach;

$id_p = 1;
    while ($id_p <= 1000) {
      $id_p += 1;  
    unset($_SESSION['carrinho'][$id_p]);
}

header("Location: /mercado-paid-egua/HTML/frontend/order_placed.php?id_f_p=".$id_pedido."");

}else{
    $_SESSION['msg_check'] = "<script language='javascript' type='text/javascript'>
    alert('Carrinho sem produtos!');</script>";
    header("Location: /mercado-paid-egua/HTML/frontend/checkout.php");
}

}else{
    $_SESSION['msg_check'] = "<script language='javascript' type='text/javascript'>
    alert('Endereço não encontrado');</script>";
    header("Location: /mercado-paid-egua/HTML/frontend/checkout.php");
}

}else{
    $_SESSION['msg_check'] = "<script language='javascript' type='text/javascript'>
    alert('Forma de Pagamento não selecionada');</script>";
    header("Location: /mercado-paid-egua/HTML/frontend/checkout.php");
}



?>