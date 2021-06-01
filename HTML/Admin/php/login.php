<?php
session_start();
include('conexao.php');
 

 
$email = $_POST["email"];
$senha = $_POST["senha"];
$query = "SELECT email FROM admin WHERE email = '$email' AND senha = '$senha'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
 
if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: /mercado-paid-egua/HTML/admin/index.php');
	exit();
} else {
	echo"<script language='javascript' type='text/javascript'>
      alert('Dados Incorretos');window.location.
      href='/mercado-paid-egua/HTML/admin/login.html'</script>";
      die();
	exit();


}

?>