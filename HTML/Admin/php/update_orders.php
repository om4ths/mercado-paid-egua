<?php
session_start();
include('conexao.php');

$status_id = $_GET['status'];
$id_ped = $_GET['id_pedido'];
$query = "UPDATE pedidos SET ped_status = '$status_id' WHERE pedido_id = '$id_ped'";
echo $query;
$insert = mysqli_query($conexao,$query);

if($insert){
   $_SESSION['msg_o'] = "<p style='color:green;'>Salvo com sucesso!</p>";
    header("Location: /mercado-paid-egua/HTML/admin/index.php");
    die();
}else{
    $_SESSION['msg_o'] = "<p style='color:red;'>Erro! não foi gravado !</p>";
    header("Location: /mercado-paid-egua/HTML/admin/index.php");
    die();
}







?>