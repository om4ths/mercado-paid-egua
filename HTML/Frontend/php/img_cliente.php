<?php
    
    session_start();
    include('conexao.php');
    include('dados_cliente.php');

    //print_r($_FILES["c_img"]);

    $nomeArquivo = $_FILES['c_img']['name'];
    $caminhoAtualArquivo = $_FILES['c_img']['tmp_name'];
    chmod ("../images/avatar/", 0777);
    $caminhoSalvar = '../images/avatar/'.$nomeArquivo;

    move_uploaded_file($caminhoAtualArquivo , $caminhoSalvar);
    
    
	$caminhoSalvar = str_replace("../", "", $caminhoSalvar);


    $cli_img = $caminhoSalvar;
    
    $query = "UPDATE cliente set foto ='$cli_img'
              WHERE telefone = '$telefone'";


     $insert = mysqli_query($conexao,$query);
     header("Location: /mercado-paid-egua/HTML/Frontend/dashboard_overview.php");        
     
       


?>