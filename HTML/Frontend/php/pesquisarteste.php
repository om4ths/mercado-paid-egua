<?php
    include("conexao.php");

    $pesquisar = $_GET['pesquisar'];
    $result_search = $cn -> query ("SELECT * FROM produtos WHERE pro_nome LIKE concat ('%', '$pesquisar', '%')");
    $array_seach = mysqli_query($conexao, $result_seach);
    while($r_seach_prow = mysqli_fetch_array($array_seach)){
        $r_seach_pro[] = $r_seach_prow;
    } 



?>