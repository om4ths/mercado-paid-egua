<?php
		
		include('conexao.php');
		
        //EXIBE TODOS OS PRODUTOS
		$select_pro = "SELECT * FROM produtos INNER JOIN categorias ON produtos.pro_cat=categorias.cat_id WHERE produtos.pro_ativo = 1 ORDER BY produtos.pro_data_criado desc";   
		$array_pro = mysqli_query($conexao,$select_pro);
		while($r_prow = mysqli_fetch_array($array_pro)){
			$r_produtos[] = $r_prow; 
		}
		
		$select_pro_dec = "SELECT * FROM produtos INNER JOIN categorias ON produtos.pro_cat=categorias.cat_id WHERE produtos.pro_ativo = 1 ORDER BY produtos.pro_porc_desconto desc";   
		$array_pro_dec = mysqli_query($conexao,$select_pro_dec);
		while($r_prow_dec = mysqli_fetch_array($array_pro_dec)){
			$r_produtos_dec[] = $r_prow_dec; 
		}

        


?>