<?php

include("conexao.php");

$view_id = $_GET['tel_id'];
echo $view_id;

$query = "DELETE FROM cliente WHERE telefone = '$view_id'" ;

    $insert = mysqli_query($conexao,$query);

    if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('Cliente deletado!');window.location.
        href='/mercado-paid-egua/HTML/admin/customers.php'</script>";
        die();
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível deletar o cliente');window.location
        .href='/mercado-paid-egua/HTML/admin/customers.php'</script>";
        die();
      }


?>