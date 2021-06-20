<?php
        include('conexao.php');
        $view_id = $_GET['p_id'];
		$select_view_pro = "SELECT * FROM produtos WHERE pro_id = '$view_id' ";   
		$array_view_pro = mysqli_query($conexao,$select_view_pro);
		$r_view_pro = mysqli_fetch_array($array_view_pro);

?>