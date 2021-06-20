<?php
session_start();
include("conexao.php");

$view_id = $_GET['id_msg'];

$query = "DELETE FROM contato WHERE id = '$view_id'" ;
$insert = mysqli_query($conexao,$query);


    if($insert){
        $_SESSION['msg'] = "<p style='color:green;'>Mensagem apagada com sucesso</p>";
        header("Location: /mercado-paid-egua/HTML/admin/mensagens.php");        
        die();
      }else{
        $_SESSION['msg'] = "<p style='color:red;'>Erro a mensagem não foi apagada com sucesso</p>";
        header("Location: /mercado-paid-egua/HTML/admin/mensagens.php");
        die();
      }


?>