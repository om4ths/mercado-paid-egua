<?php
$userbd = ('localhost');
$usuario = ('root');
$senha = ('');
$banco = ('mercado');

$conexao = mysqli_connect($userbd, $usuario, $senha, $banco) or die ('Não foi possível conectar');

if(!$conexao){
    die("Falha na conexao: " . mysqli_connect_error());
}else{
    echo "Conexao realizada com sucesso";
}  
?>