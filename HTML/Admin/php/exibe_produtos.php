<?php
		
		include('conexao.php');
		
		$select_pro = "SELECT * FROM produtos ";   
		$array_pro = mysqli_query($conexao,$select_pro);
		while($r_prow = mysqli_fetch_array($array_pro)){
			$r_produtos[] = $r_prow; 
		}
		

        


?>