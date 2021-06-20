<?php
session_start();
include("conexao.php");


$nome = $_POST ["nome"]; 
$email = $_POST ["email"]; 
$assunto = $_POST ["assunto"];
$msg = $_POST ["msg"];

 
$query = "INSERT INTO contato( nome , email , assunto, msg )
VALUES ('$nome', '$email', '$assunto', '$msg')";

$insert = mysqli_query($conexao,$query);

if($insert){
    $_SESSION['msg_c'] = "<p style='color:green;'>Mensagem enviada com sucesso!</p>";
    header("Location: /mercado-paid-egua/HTML/frontend/contact_us.php");        
    die();
}else{
    $_SESSION['msg_c'] = "<p style='color:green;'>Erro ao enviar</p>";
    header("Location: /mercado-paid-egua/HTML/frontend/contact_us.php");
    die();
}

?>