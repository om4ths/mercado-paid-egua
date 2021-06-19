<?php
session_start();
include('conexao.php');
include('dados_cliente.php');



$tipo = $_POST['tipo'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$cep = $_POST['cep'];
$n_end = $_POST['n_end'];
$cidade = $_POST['cidade'];
$complemento = $_POST['complemento'];


if($tipo == 1){
$tipo = 'Casa';
}elseif($tipo == 2){
$tipo = 'Trabalho';
}elseif($tipo == 3){
$tipo = 'Outro';
}



$query_end = "INSERT INTO endereco ( id_telefone , rua , cep, numero , tipo, cidade, bairro, complemento)
    VALUES ('$telefone', '$rua', '$cep', '$n_end', '$tipo', '$cidade', '$bairro', '$complemento')";

$insert_end = mysqli_query($conexao,$query_end);

if($insert_end){
     echo"<script language='javascript' type='text/javascript'>
     alert('Usuário cadastrado com sucesso!');</script>";
     header('Location: /mercado-paid-egua/HTML/frontend/checkout.php');
      die();
    }else{
      echo"<script language='javascript' type='text/javascript'>
      alert('Não foi possível cadastrar esse usuário');</script>";
      die();
    }




  





?>
