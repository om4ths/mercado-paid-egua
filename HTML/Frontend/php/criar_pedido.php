<?php 
include('func.php');
include("carrinho.php");
include("conexao.php");

$id_cliente = $_SESSION['telefone'];
$id_pedido = random_int(1, 9999) ;
$data_entrega = $_GET['dia_entrega'];
$hora_entrega = $_GET['hora_entrega'];

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

echo "id_usuario: <br>".$id_cliente;
echo "<br>id_endereco: <br>".$id_end;
echo "<br>id_pedido: <br>".$id_pedido;
echo "<br>Data de Entrega: <br>".$data_entrega;
echo "<br>Hora da Entrega: <br>".$hora_entrega;
echo "<br>Valor total: <br>".$valor_total;
echo "<br>Valor do Frete: <br>".$frete;
echo "<br>Valor Total do Desconto: <br>".$valor_total_desc;
echo "<br>Total de Produtos: <br>".$total_prod;
echo "<br>";
echo "<br>id_pedido: <br>".$id_pedido;
echo "<br>Produto ID: <br>".$id_produto = $result['id'];
echo "<br>Produto Nome: <br>".$result['name'];
echo "<br>Quantidade: <br>".$quantidade = $result['quantity'];
echo "<br>Valor com desconto: <br>".$desconto = $result['discount'];
echo "<br>Valor sem Desconto <br>".$result['price'];
echo "<br>";
echo "<br>Metodo de pagamento: <br>".$pagamento;
echo "<br><br><br>";


    $query = "INSERT INTO pedidos (pedido_id,   produto_id ,   cliente_id ,   quantidade , total_produtos, valor_total_pro,  valor_pedido ,   metodo_pagamento , data_entrega, hora_entrega)
                        VALUES ( '$id_pedido', '$id_produto', '$id_cliente', '$quantidade', '$total_prod',  '$valor_total',  '$desconto',     '$pagamento',    '$data_entrega', '$hora_entrega')";


    $insert = mysqli_query($conexao,$query);

    echo $query;

endforeach;
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