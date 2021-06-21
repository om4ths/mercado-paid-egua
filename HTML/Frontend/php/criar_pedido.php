<?php 
include('func.php');
include("carrinho.php");

$valor_total = number_format($totalCfrete, 2, ',', '.');
$frete = $frete ;
$valor_total_desc = number_format($totaldesc, 2, ',', '.');
$total_prod = number_format($totalCarts, 2, ',', '.');

echo "Valor total: <br>".$valor_total;
echo "<br>Valor do Frete: <br>".$frete;
echo "<br>Valor Total do Desconto: <br>".$valor_total_desc;
echo "<br>Total de Produtos: <br>".$total_prod;


foreach($resultsCarts as $result) : 
echo "<br>Dentro do for <br>".$result['id'];

endforeach;

echo "<br>Fora do for: <br>".$result['id'];

?>