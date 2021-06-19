<?php

include('conexao.php');
$telefone = $_SESSION['telefone'];

if(isset($_GET['id'])){
$id_end = $_GET['id'];    
$query = "SELECT * FROM endereco WHERE id_telefone = '$telefone' AND id='$id_end'";
$array = mysqli_query($conexao,$query);
$r_endereco = mysqli_fetch_array($array);
};




?>