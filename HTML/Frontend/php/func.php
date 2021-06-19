<?php 

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

			return round($porcentagemDesc);
		}

        function ponto_virgula($valor){
			$valor = trim($valor);
			$valor = str_replace(".", ",", $valor);
			
			return $valor;
		   }
        function formata_preco($valor){
            return number_format($valor, 2, ',', '');
           
        }
        function formataHora($valor){
            return date("d/m/Y H:i:s", strtotime($valor));
            
        }

	?>