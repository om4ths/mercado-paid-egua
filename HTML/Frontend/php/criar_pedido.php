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
$frete = $frete ;
$valor_total_desc = number_format($totaldesc, 2, ',', '.');
$total_prod = number_format($totalCarts, 2, ',', '.');


if($resultsCarts){
foreach($resultsCarts as $result) : 

$data_entrega = implode('-', array_reverse(explode('/', $data_entrega)));
$id_produto = $result['id'];
$quantidade = $result['quantity'];
$desconto = $result['discount'];


$query = "INSERT INTO pedidos (pedido_id,  ped_status, produto_id ,   cliente_id ,   quantidade , total_produtos, valor_total_pro,  valor_pedido ,   metodo_pagamento , data_entrega, hora_entrega)
                    VALUES ( '$id_pedido','$status_p' ,'$id_produto', '$id_cliente', '$quantidade', '$total_prod',  '$valor_total',  '$desconto',     '$pagamento',    '$data_entrega', '$hora_entrega')";


    $insert = mysqli_query($conexao,$query);

    echo $query;
    echo $insert;
    echo "<br><br><br>";

endforeach;

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