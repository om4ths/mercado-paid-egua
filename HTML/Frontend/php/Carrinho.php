<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
>?php
	$produtos = array(	['imagem'=>item1.png,'preco'=>'200'],
				['imagem'=>item2.png,'preco'=>'200'],
				['imagem'=>item3.png,'preco'=>'200']);
foreach ($produtos as $key => value){
?>

	<div class="produto">
		<img src="<?php echo $value[imagem] >?
		<a href="?adicionar=<?php echo $key?> </a>
	</div><!--produto-->

<?php

	if(isset($_GET['adicionar'])){
		$idproduto = (int )$_GET['adicionar'];
		if(isset($itens[$idproduto]){
			if(isset($_SESSION['carrinho'][$idproduto])){
				$_SESSION['carrinho'][$idproduto]['Quantidade']++;
			}else{
				$_SESSION['carrinho'][$idproduto] = array('quantidade'=>1,'nome'=>$produtos[$idprodutos]['nome'],'preco'=>$itens[$idproduto][preco]);
			}

			echo '<script>alert"(o item foi adicionado ao carrinho.");</script>';
	
		}else{
			die('voce não pode adicionar um item que não existe.');
		}
	}
?>

<h2 class="title">Carrinho:</h2>

<?php
	foreach ($SESSION['carrinho'] as $key => $value) {
		//NOMDE DO PRODUTO
		//QUANTIDADE
		//PREÇO
		echo "<p>Nome: '.$value['nome']' | Quantidade: '.$value['nome']' |  Preço: '.$value['nome']*.$value['Quantidade']'</p>";
	}
?>
</body>
</html>
