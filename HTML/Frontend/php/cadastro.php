<?php

include("conexao.php");


$nome = $_POST ["nome"]; 
$email = $_POST ["email"]; 
$tel = $_POST ["telefone"]; 
$cep = $_POST ["cep"]; 
$senha = $_POST ["senha"]; 
$confsenha = $_POST["confsenha"];
 

$query_select = "SELECT telefone FROM cliente WHERE telefone = '$tel'";
$select = mysqli_query($conexao,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['telefone'];



if($senha != $confsenha){
    echo"<script language='javascript' type='text/javascript'>
    alert('AS SENHAS NÃO SÃO IGUAIS!');window.location.href='/mercado-paid-egua/HTML/frontend/sign_up.html';</script>";
    die();
}else{


if($logarray == $tel){

    echo"<script language='javascript' type='text/javascript'>
    alert('Esse telefone já existe');window.location.href='/mercado-paid-egua/HTML/frontend/sign_up.html';</script>";
    die();

}else{
    $query = "INSERT INTO cliente ( nome , email , telefone, cep , senha )
    VALUES ('$nome', '$email', '$tel', '$cep', '$senha')";

    $insert = mysqli_query($conexao,$query);

    if($insert){
      echo"<script language='javascript' type='text/javascript'>
      alert('Usuário cadastrado com sucesso!');window.location.
      href='/mercado-paid-egua/HTML/frontend/sign_in.html'</script>";
      die();
    }else{
      echo"<script language='javascript' type='text/javascript'>
      alert('Não foi possível cadastrar esse usuário');window.location
      .href='/mercado-paid-egua/HTML/frontend/sign_up.html'</script>";
      die();
    }
  }
}
?>