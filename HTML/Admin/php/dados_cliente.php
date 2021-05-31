<?php
		
		include('conexao.php');
		
		$select_end_cli = "SELECT * FROM cliente ";   
		$array_end_cli = mysqli_query($conexao,$select_end_cli);
		while($r_end_cliw = mysqli_fetch_array($array_end_cli)){
			$r_end_cli[] = $r_end_cliw; 
		}
?>





