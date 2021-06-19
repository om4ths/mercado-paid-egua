<?php

		include('conexao.php');

    	$view_id_cat = $_GET['c_id'];
		$select_view_shop_grid = "SELECT * FROM produtos JOIN categorias WHERE categorias.cat_id = '$view_id_cat' ";   
		$array_view_shop_grid = mysqli_query($conexao,$select_view_shop_grid);
		$r_view_shop_grid = mysqli_fetch_array($array_view_shop_grid);
 
		$view_pro_cat = $_GET['c_id'];
        $select_pro_cat = "SELECT * FROM produtos WHERE pro_cat = '$view_pro_cat' order by pro_data_criado desc";   
		$array_pro_cat = mysqli_query($conexao,$select_pro_cat);
		while($r_prow_cat = mysqli_fetch_array($array_pro_cat)){
			$r_produtos_cat[] = $r_prow_cat;
		}

?>