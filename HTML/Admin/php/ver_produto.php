<?php
        include('conexao.php');
        $view_id = $_GET['p_id'];
		$select_view_pro = "SELECT * FROM produtos WHERE pro_id = '$view_id' ";   
		$array_view_pro = mysqli_query($conexao,$select_view_pro);
		$r_view_pro = mysqli_fetch_array($array_view_pro);


        $view_pro_cat = $r_view_pro['pro_cat'];
        $select_pro_cat = "SELECT * FROM produtos WHERE pro_cat = '$view_pro_cat' order by pro_id desc LIMIT 0, 3 ";   
		$array_pro_cat = mysqli_query($conexao,$select_pro_cat);
		while($r_prow_cat = mysqli_fetch_array($array_pro_cat)){
			$r_produtos_cat[] = $r_prow_cat; 
		}

?>