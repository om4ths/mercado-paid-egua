<?php

include('conexao.php');

		if(isset($_GET['c_id'])){
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
	}

	if(isset($_GET['new_id'])){

        $select_new = "SELECT * FROM produtos WHERE pro_ativo = 1 order by pro_data_criado desc";   
		$array_new = mysqli_query($conexao,$select_new);
		while($r_prow_cat = mysqli_fetch_array($array_new)){
			$r_produtos_cat[] = $r_prow_cat;		
	}
	
}

if(isset($_GET['pesquisar'])){
	$pesquisar = $_GET['pesquisar'];
	$select_new = "SELECT * FROM produtos WHERE pro_nome LIKE '%$pesquisar%' LIMIT 10";   
	$array_new = mysqli_query($conexao,$select_new);
	while($r_prow_cat = mysqli_fetch_array($array_new)){
		$r_produtos_cat[] = $r_prow_cat;		
}

}

if(isset($_GET['destaque'])){
	$select_pro_dec = "SELECT * FROM produtos WHERE pro_ativo = 1 order by pro_porc_desconto desc";   
	$array_pro_dec = mysqli_query($conexao,$select_pro_dec);
	while($r_prow_dec = mysqli_fetch_array($array_pro_dec)){
		$r_produtos_cat[] = $r_prow_dec; 
	}
}

?>