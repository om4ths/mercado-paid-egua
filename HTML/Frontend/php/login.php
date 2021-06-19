<?php
session_start();
include('conexao.php');
 

 
$tel = $_POST["telefone"];
$senha = $_POST["senha"];
 
$query = "SELECT telefone FROM cliente WHERE telefone = '$tel' AND senha = '$senha'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['telefone'] = $tel;
	header('Location: /mercado-paid-egua/HTML/frontend/index.php');
	exit();
} else {
	echo"<script language='javascript' type='text/javascript'>
      alert('Dados Incorretos');window.location.
      href='/mercado-paid-egua/HTML/frontend/sign_in.php'</script>";
      die();
	exit();
}