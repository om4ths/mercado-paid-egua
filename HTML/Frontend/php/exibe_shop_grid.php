<?php

include('conexao.php');
        $view_id_cat = $_GET['c_id'];
		$select_view_shop_grid = "SELECT * FROM produtos JOIN categorias WHERE categorias.cat_id = '$view_id_cat' ";   
		$array_view_shop_grid = mysqli_query($conexao,$select_view_shop_grid);
		$r_view_shop_grid = mysqli_fetch_array($array_view_shop_grid);

?>