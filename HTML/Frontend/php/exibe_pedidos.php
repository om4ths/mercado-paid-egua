<?php
        include('conexao.php');

        $view_telefone = $_SESSION['telefone'];
        $id_f_pedido = $_GET['id_f_p'];
		$select_view_pedido = "SELECT * FROM `pedidos` WHERE cliente_id = '$view_telefone' AND pedido_id ='$id_f_pedido'";   
		$array_view_pedido = mysqli_query($conexao,$select_view_pedido);
		$r_view_pedido = mysqli_fetch_array($array_view_pedido);



?>