<?php

include("conexao.php");


$email = $_POST ["email"]; 
$tel = $_POST ["telefone"]; 
$cep = $_POST ["cep"]; 
$senha = $_POST ["senha"]; 

 

$query_select = "SELECT telefone FROM cliente WHERE telefone = '$tel'";
$select = mysqli_query($conexao,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['telefone'];



if(!$logarray == $tel){

    echo"<script language='javascript' type='text/javascript'>
    alert('Esse usuario não existe');window.location.href='/mercado-paid-egua/HTML/frontend/sign_up.html';</script>";
    die();

}else{
    $query = "UPDATE cliente SET senha='$senha' 
    WHERE email = '$email' AND cep = '$cep' AND telefone = '$tel' ";

    $insert = mysqli_query($conexao,$query);

    if($insert){
      echo"<script language='javascript' type='text/javascript'>
      alert('Nova Senha cadastrada com sucesso!');window.location.
      href='/mercado-paid-egua/HTML/frontend/sign_in.html'</script>";
      die();
    }else{
      echo"<script language='javascript' type='text/javascript'>
      alert('Não foi possível alterar a senha');window.location
      .href='/mercado-paid-egua/HTML/frontend/forgot_password.html'</script>";
      die();
    }
  }

?>