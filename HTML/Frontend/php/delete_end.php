<?php
session_start();
include("conexao.php");

$end_id = $_GET['id'];


$query_end = "DELETE FROM endereco WHERE id = '$end_id'" ;
$insert_end = mysqli_query($conexao,$query_end);

    if($insert_end){
        $_SESSION['msg_e'] = "<p style='color:green;'>Apagado com sucesso</p>";
        header("Location: /mercado-paid-egua/HTML/Frontend/dashboard_my_addresses.php");        
        die();
      }else{
        $_SESSION['msg_e'] = "<p style='color:red;'>Erro o endereço não foi apagado</p>";
        header("Location: /mercado-paid-egua/HTML/Frontend/dashboard_my_addresses.php");        
        die();
      }


?>