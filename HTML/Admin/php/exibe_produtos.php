<?php
		
		include('conexao.php');
		
        //EXIBE TODOS OS PRODUTOS
		$select_pro = "SELECT * FROM produtos ORDER BY pro_data_criado desc";   
		$array_pro = mysqli_query($conexao,$select_pro);
		while($r_prow = mysqli_fetch_array($array_pro)){
			$r_produtos[] = $r_prow; 
		}
		

        


?>