<?php


    $pesquisar = $_GET['pesquisar'];
    $result_seach = "SELECT * FROM produtos WHERE pro_nome LIKE '%$pesquisar%' LIMIT 5";
    $array_seach = mysqli_query($conexao, $result_seach);
    while($r_seach_prow = mysqli_fetch_array($array_seach)){
        $r_seach_pro[] = $r_seach_prow;
    }
    ?>
    <?php 
	if(isset($r_seach_pro))
	{	
	 foreach($r_seach_pro as $key => $r_seach)
	{
    ?>
       <p><?php echo $r_seach['pro_nome']; ?> </p>
       <p><?php echo $r_seach['pro_cat']; ?> </p>
       <p><?php echo $r_seach['pro_id']; ?> </p>


    																		
	
    <?php
		};
	};
	 


?>