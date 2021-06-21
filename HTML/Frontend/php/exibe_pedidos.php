<?php
        include('conexao.php');

        $view_telefone = "(91) 99357-0847";

		$select_view_pedido = "SELECT * FROM `pedidos` WHERE cliente_id = '$view_telefone' ";   
		$array_view_pedido = mysqli_query($conexao,$select_view_pedido);
		$r_view_pedido = mysqli_fetch_array($array_view_pedido);



?>