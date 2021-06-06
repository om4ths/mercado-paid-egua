<?php
session_start();
include("conexao.php");

$view_id = $_GET['id'];
echo $view_id;

$query = "DELETE FROM cliente WHERE id = '$view_id'" ;

    $insert = mysqli_query($conexao,$query);

    if($insert){
        $_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
        header("Location: /mercado-paid-egua/HTML/admin/customers.php");
        die();
      }else{
        $_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
        header("Location: /mercado-paid-egua/HTML/admin/customers.php");
        die();
      }


?>