<?php

    include('conexao.php');

    
    $nomeArquivo = $_FILES['c_img']['name'];
    $caminhoAtualArquivo = $_FILES['c_img']['tmp_name'];
    chmod ("../images/category/", 0777);
    $caminhoSalvar = '../images/category/'.$nomeArquivo;

    move_uploaded_file($caminhoAtualArquivo , $caminhoSalvar);
    
    $cat_img = $caminhoSalvar;


    $cat_nome = $_POST['c_name'];
    $cat_desc =  $_POST['c_desc'];
    $cat_ativo = $_POST['c_status'];

    $query = "INSERT INTO categorias (cat_nome, cat_desc, cat_ativo, cat_img)
              VALUES ('$cat_nome', '$cat_desc', '$cat_ativo', '$cat_img')";

    $insert = mysqli_query($conexao,$query);

   //echo $query;

    if($insert){
        $_SESSION['msg'] = "<p style='color:green;'>Categoria adicionada com sucesso!</p>";
        header("Location: /mercado-paid-egua/HTML/admin/category.php");
        die();
      }else{
        $_SESSION['msg'] = "<p style='color:red;'>Erro! a categoria não foi gravado com sucesso!</p>";
        header("Location: /mercado-paid-egua/HTML/admin/add_category.php");
        die();
      }


?>