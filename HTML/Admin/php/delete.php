<?php

include("conexao.php");

$view_id = $_GET['tel_id'];
echo $view_id;

$query = "DELETE FROM cliente WHERE telefone = '$view_id'" ;

    $insert = mysqli_query($conexao,$query);

    if($insert){
        $_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
        header("Location: index.php");
        die();
      }else{
        $_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
        header("Location: index.php");
        die();
      }


?>