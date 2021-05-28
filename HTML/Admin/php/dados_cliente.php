<?php
		
		include('conexao.php');
		$telefone = $_SESSION['telefone'];
		$query = "SELECT * FROM cliente WHERE telefone = '$telefone'";
		$array = mysqli_query($conexao,$query);
		$resultado = mysqli_fetch_array($array);
?>