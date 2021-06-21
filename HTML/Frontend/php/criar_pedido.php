<?php 
include('func.php');
include("carrinho.php");

$id_cliente = $_SESSION['telefone'];
$id_pedido = random_int(1, 9999) ;


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
echo "<br>Valor total: <br>".$valor_total;
echo "<br>Valor do Frete: <br>".$frete;
echo "<br>Valor Total do Desconto: <br>".$valor_total_desc;
echo "<br>Total de Produtos: <br>".$total_prod;
echo "<br>id_pedido: <br>".$id_pedido;
echo "<br>Produto ID: <br>".$result['id'];
echo "<br>Produto Nome: <br>".$result['name'];
echo "<br>Quantidade: <br>".$result['quantity'];
echo "<br>Valor com desconto: <br>".$result['discount'];
echo "<br>Valor sem Desconto <br>".$result['price'];
echo "<br><br><br>";
endforeach;
}
}else{
    $_SESSION['msg_check'] = "<script language='javascript' type='text/javascript'>
    alert('Endereço não encontrado');</script>";
      header("Location: /mercado-paid-egua/HTML/frontend/checkout.php");
}

?>