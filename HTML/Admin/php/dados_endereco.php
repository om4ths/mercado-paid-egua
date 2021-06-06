<?php
include('dados_cliente.php');

$view_id = $_GET['id_tel'];

$select_end_casa = "SELECT * FROM endereco WHERE id_telefone = '$view_id' AND tipo = 'Casa'";   
$array_end_casa = mysqli_query($conexao,$select_end_casa);
while($r_end_casaw = mysqli_fetch_array($array_end_casa)){
    $r_end_casa[] = $r_end_casaw; 
}


$select_end_trab = "SELECT * FROM endereco WHERE id_telefone = '$view_id' AND tipo = 'Trabalho'";   
$array_end_trab = mysqli_query($conexao,$select_end_trab);

while($r_end_trabw = mysqli_fetch_array($array_end_trab)){
    $r_end_trab[] = $r_end_trabw; 
}

$select_end_out = "SELECT * FROM endereco WHERE id_telefone = '$view_id' AND tipo = 'Outro'";   
$array_end_out = mysqli_query($conexao,$select_end_out);

while($r_end_outw = mysqli_fetch_array($array_end_out)){
    $r_end_out[] = $r_end_outw; 
}
?>