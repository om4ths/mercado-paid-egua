<?php
include('verificar_login.php');
include("conexao.php");


$n_senha = $_POST ['senha'];
$c_senha = $_POST['c_senha'];



if(!$n_senha == $c_senha){

    echo"<script language='javascript' type='text/javascript'>
    alert('Senhas não são exatas');window.location.href='/mercado-paid-egua/HTML/admin/change_password.html';</script>";
    die();

}else{
    $query = "UPDATE admin SET Senha='$n_senha' 
    WHERE email = '$email_id'";

    $insert = mysqli_query($conexao,$query);
    
    if($insert){
      echo"<script language='javascript' type='text/javascript'>
      alert('Nova Senha cadastrada com sucesso!');window.location.
      href='/mercado-paid-egua/HTML/admin/index.php'</script>";
      die();
    }else{
      echo"<script language='javascript' type='text/javascript'>
      alert('Não foi possível alterar a senha');window.location
      .href='/mercado-paid-egua/HTML/admin/change_password.html'</script>";
      die();
    }
  }

?>