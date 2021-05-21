<?php

include("conexao.php");


$nome = $_POST ["nome"]; 
$email = $_POST ["email"]; 
$tel = $_POST ["telefone"]; 
$cep = $_POST ["cep"]; 
$senha = $_POST ["senha"]; 
$confsenha = $_POST["confsenha"];



//mysqli_query($conexao,$query)
//mysqli_close($conexao); 

$query_select = "SELECT email FROM cliente WHERE email = '$email'";
$select = mysqli_query($conexao,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];



if($senha != $confsenha){
    echo"<script language='javascript' type='text/javascript'>
    alert('AS SENHAS NÃO SÃO IGUAIS!');window.location.href='/mercado-paid-egua/HTML/frontend/sign_up.html';</script>";
    die();
}else{


if($logarray == $email){

    echo"<script language='javascript' type='text/javascript'>
    alert('Esse email já existe');window.location.href='/mercado-paid-egua/HTML/frontend/sign_up.html';</script>";
    die();

}else{
    $query = "INSERT INTO cliente ( nome , email , telefone, cep , senha )
    VALUES ('$nome', '$email', '$tel', '$cep', '$senha')";

    $insert = mysqli_query($conexao,$query);

    if($insert){
      echo"<script language='javascript' type='text/javascript'>
      alert('Usuário cadastrado com sucesso!');window.location.
      href='/mercado-paid-egua/HTML/frontend/sign_in.html'</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>
      alert('Não foi possível cadastrar esse usuário');window.location
      .href='/mercado-paid-egua/HTML/frontend/sign_up.html'</script>";
    }
  }
}
?>