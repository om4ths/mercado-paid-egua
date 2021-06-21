<?php  

        include('conexao.php');
        $client_id =  $_SESSION['telefone'];

        $select_pedidos = "SELECT * FROM pedidos WHERE cliente_id = '$client_id' GROUP BY pedido_id order by data_pedido DESC";   
        $array_pedidos = mysqli_query($conexao,$select_pedidos);
        while($r_pedidosw = mysqli_fetch_array($array_pedidos)){
            $r_pedidos[] = $r_pedidosw;
            
		}



       

?>