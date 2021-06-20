<?php
		
		include('conexao.php');
		
		$select_cli = "SELECT * FROM contato ";   
		$array_cli = mysqli_query($conexao,$select_cli);
		while($r_cliw = mysqli_fetch_array($array_cli)){
			$r_msg[] = $r_cliw; 
		}

?>





