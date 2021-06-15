<?php 
		include('../Admin/php/exibe_categoria.php');
		include('../Admin/php/exibe_produtos.php');

		//FUNÇÃO PARA LIMPAR O INICIO DO LINK
		function limpa_link($valor){
			$valor = trim($valor);
			$valor = str_replace("../", "../Admin/", $valor);
			
			return $valor;
		   }

		//FUNÇÃO PARA CALCULAR A PORCENTAGEM DO DESCONTO
		function porcentagemDesconto($valorTotal, $valorCDesconto){
			$valorDDesconto = $valorTotal - $valorCDesconto;
			$porcentagemDesc = ($valorDDesconto * 100) / $valorTotal;

			return $porcentagemDesc;
		}

	?>