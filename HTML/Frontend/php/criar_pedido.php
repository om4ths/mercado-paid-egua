<?php 
include('func.php');
include("carrinho.php");
include("conexao.php");

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
echo "<br>";
echo "<br>id_pedido: <br>".$id_pedido;
echo "<br>Produto ID: <br>".$id_produto = $result['id'];
echo "<br>Produto Nome: <br>".$result['name'];
echo "<br>Quantidade: <br>".$quantidade = $result['quantity'];
echo "<br>Valor com desconto: <br>".$desconto = $result['discount'];
echo "<br>Valor sem Desconto <br>".$result['price'];
echo "<br><br><br>";
echo "<br>Metodo de pagamento: <br>".$metodo_pagamento = 1;
echo "<br>data da entrega <br>".$data_entrega = date ('d/m/Y');
echo "<br>id_pedido: <br>".$hora_entrega = "cdfggd";

    $query = "INSERT INTO pedidos (pedido_id,   produto_id ,   cliente_id ,   quantidade , total_produtos,  valor_predido ,   metodo_pagamento , data_entrega, hora_entrega)
                        VALUES ( '$id_pedido', '$id_produto', '$id_cliente', '$quantidade', '$total_prod',   '$desconto',  '$metodo_pagamento', '$data_entrega', '$hora_entrega')";


    $insert = mysqli_query($conexao,$query);

    echo $query;

endforeach;
}
}else{
    $_SESSION['msg_check'] = "<script language='javascript' type='text/javascript'>
    alert('Endereço não encontrado');</script>";
      header("Location: /mercado-paid-egua/HTML/frontend/checkout.php");
}



?>