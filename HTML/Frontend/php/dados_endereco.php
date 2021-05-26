<?php
include('conexao.php');
include('dados_cliente.php');

$select_end_casa = "SELECT * FROM endereco WHERE id_telefone = '$telefone' AND tipo = 'Casa'";   
$array_end_casa = mysqli_query($conexao,$select_end_casa);
$r_end_casa = mysqli_fetch_array($array_end_casa);

$select_end_trab = "SELECT * FROM endereco WHERE id_telefone = '$telefone' AND tipo = 'Trabalho'";   
$array_end_trab = mysqli_query($conexao,$select_end_trab);
$r_end_trab = mysqli_fetch_array($array_end_trab);

$select_end_out = "SELECT * FROM endereco WHERE id_telefone = '$telefone' AND tipo = 'Outro'";   
$array_end_out = mysqli_query($conexao,$select_end_out);
$r_end_out = mysqli_fetch_array($array_end_out);

?>