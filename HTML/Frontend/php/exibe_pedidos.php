<?php
        include('conexao.php');

        $view_telefone = $_SESSION['telefone'];
        $id_f_pedido = $_GET['id_f_p'];
		$select_view_pedido = "SELECT * FROM `pedidos` WHERE cliente_id = '$view_telefone' AND pedido_id ='$id_f_pedido'";   
		$array_view_pedido = mysqli_query($conexao,$select_view_pedido);
		$r_view_pedido = mysqli_fetch_array($array_view_pedido);


		$id_order = $r_view_pedido['pedido_id'];

		$select_view_end = "SELECT * FROM `endereco` WHERE id_telefone = '$view_telefone' AND id='$id_order'";   
		$array_view_end = mysqli_query($conexao,$select_view_end);
		$r_view_end = mysqli_fetch_array($array_view_end);



?>