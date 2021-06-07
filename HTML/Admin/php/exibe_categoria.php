<?php
		
		include('conexao.php');
		
		$select_cat = "SELECT * FROM categorias ";   
		$array_cat = mysqli_query($conexao,$select_cat);
		while($r_catw = mysqli_fetch_array($array_cat)){
			$r_categoria[] = $r_catw; 
		}
		
?>