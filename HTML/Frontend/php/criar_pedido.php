<?php 
include('func.php');
include("carrinho.php");

$id_cliente = $_SESSION['telefone'];
$id_end = $_GET['id_end'];
echo "id_usuario: <br>".$id_cliente;
echo "<br>id_end: <br>".$id_end;

$valor_total = number_format($totalCfrete, 2, ',', '.');
$frete = $frete ;
$valor_total_desc = number_format($totaldesc, 2, ',', '.');
$total_prod = number_format($totalCarts, 2, ',', '.');



echo "<br><br><br>Valor total: <br>".$valor_total;
echo "<br>Valor do Frete: <br>".$frete;
echo "<br>Valor Total do Desconto: <br>".$valor_total_desc;
echo "<br>Total de Produtos: <br>".$total_prod;

if($resultsCarts){
foreach($resultsCarts as $result) : 
echo "<br><br><br>Dentro do for ID: <br>".$result['id'];
echo "<br>Dentro do for Nome: <br>".$result['name'];
echo "<br>Dentro do for Valor com desconto: <br>".$result['discount'];
echo "<br>Dentro do for Valor sem Desconto <br>".$result['price'];
endforeach;
}


?>