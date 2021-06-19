<?php
		
		include('conexao.php');
		
		$select_cli = "SELECT * FROM cliente ";   
		$array_cli = mysqli_query($conexao,$select_cli);
		while($r_cliw = mysqli_fetch_array($array_cli)){
			$r_cli[] = $r_cliw; 
		}


 




		
		$view_id = $_GET['id_tel'];
		$select_view_cli = "SELECT * FROM cliente WHERE telefone = '$view_id' ";   
		$array_view_cli = mysqli_query($conexao,$select_view_cli);
		$r_view_cli = mysqli_fetch_array($array_view_cli);
		






?>





