<?php
session_start();
include("conexao.php");


$nome = $_POST ["nome"]; 
$email = $_POST ["email"]; 
$tel = $_POST ["telefone"]; 
$data_nascimento = $_POST ["dtnasc"]; 
$data_nascimento = implode("-",array_reverse(explode("/",$data_nascimento)));
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
    $query = "INSERT INTO cliente ( nome , email , telefone, data_nascimento , senha )
    VALUES ('$nome', '$email', '$tel', '$data_nascimento', '$senha')";

    $insert = mysqli_query($conexao,$query);

    if($insert){
      $_SESSION['msg_l'] = "<p style='color:green;'>Cadastro feito com sucesso</p>";
      header("Location: /mercado-paid-egua/HTML/frontend/sign_in.php");        
      die();
    }else{
      $_SESSION['msg_l'] = "<p style='color:green;'>Erro ao cadastrar</p>";
      header("Location: /mercado-paid-egua/HTML/frontend/sign_in.php");
      die();
    }
  }
}
?>