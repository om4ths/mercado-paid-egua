<?php
		
		include('conexao.php');
		
		$select_cli = "SELECT * FROM pedidos GROUP BY pedido_id ORDER BY data_pedido DESC ";   
		$array_cli = mysqli_query($conexao,$select_cli);		
		while($r_cliw = mysqli_fetch_array($array_cli)){
			$r_cli[] = $r_cliw;

	}




	
		$view_id_p = $_GET['pedido_id'];
		$select_view_cli = "SELECT * FROM pedidos WHERE pedido_id = '$view_id_p' GROUP BY pedido_id ";   
		$array_view_cli = mysqli_query($conexao,$select_view_cli);
		$r_view_ped = mysqli_fetch_array($array_view_cli);
		
		if(isset($_GET['pedido_id'])){
		$view_id = $r_view_ped['id_endereco'];
		$select_view_cli = "SELECT * FROM endereco WHERE id = '$view_id'  ";   
		$array_view_cli = mysqli_query($conexao,$select_view_cli);
		$r_view_end = mysqli_fetch_array($array_view_cli);
		
		$select_cli = "SELECT * FROM pedidos WHERE pedido_id='$view_id_p' ";   
		$array_cli = mysqli_query($conexao,$select_cli);		
		while($r_cliw = mysqli_fetch_array($array_cli)){
			$r_pro[] = $r_cliw;

		}
	
	
		}



		




?>





