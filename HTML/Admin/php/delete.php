<?php
session_start();
include("conexao.php");

$view_id = $_GET['id_tel'];

$query = "DELETE FROM cliente WHERE telefone = '$view_id'" ;
$query_end = "DELETE FROM endereco WHERE id_telefone = '$view_id'" ;
$insert = mysqli_query($conexao,$query);
$insert_end = mysqli_query($conexao,$query_end);

    if($insert & $insert_end){
        $_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
        header("Location: /mercado-paid-egua/HTML/admin/customers.php");        
        die();
      }else{
        $_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
        header("Location: /mercado-paid-egua/HTML/admin/customers.php");
        die();
      }


?>