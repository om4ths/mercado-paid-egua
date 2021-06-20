<?php
        include('conexao.php');
        $view_id = $_GET['p_id'];
		$select_view_pro = "SELECT * FROM produtos WHERE pro_id = '$view_id' ";   
		$array_view_pro = mysqli_query($conexao,$select_view_pro);
		$r_view_pro = mysqli_fetch_array($array_view_pro);

        $view_id_cat = $r_view_pro['pro_cat'];
		$select_view_cat = "SELECT * FROM categorias WHERE cat_id = '$view_id_cat' ";   
		$array_view_cat = mysqli_query($conexao,$select_view_cat);
		$r_view_cat = mysqli_fetch_array($array_view_cat);

        $view_pro_cat = $r_view_pro['pro_cat'];
        $select_pro_cat = "SELECT * FROM produtos WHERE pro_cat = '$view_pro_cat' order by pro_data_criado desc LIMIT 0, 3 ";   
		$array_pro_cat = mysqli_query($conexao,$select_pro_cat);
		while($r_prow_cat = mysqli_fetch_array($array_pro_cat)){
			$r_produtos_cat[] = $r_prow_cat;
		}

		$select_pro_dec = "SELECT * FROM produtos INNER JOIN categorias ON produtos.pro_cat=categorias.cat_id WHERE produtos.pro_ativo = 1 ORDER BY produtos.pro_porc_desconto desc";   
		$array_pro_dec = mysqli_query($conexao,$select_pro_dec);
		while($r_prow_dec = mysqli_fetch_array($array_pro_dec)){
			$r_produtos_dec[] = $r_prow_dec; 
		}

?>