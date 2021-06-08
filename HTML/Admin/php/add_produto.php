<?php

    include('conexao.php');

    //print_r($_FILES["p_img"]);

    $nomeArquivo = $_FILES['p_img']['name'];
    $caminhoAtualArquivo = $_FILES['p_img']['tmp_name'];
    chmod ("../images/product/", 0777);
    $caminhoSalvar = '../images/product/'.$nomeArquivo;

    move_uploaded_file($caminhoAtualArquivo , $caminhoSalvar);
    


    $pro_nome = $_POST['p_nome'];
    $pro_desc =  $_POST['p_desc'];
    $pro_cat = $_POST['p_cat'];
    $pro_valor = $_POST['p_valor'];
    $pro_desconto = $_POST['p_desconto'];
    $pro_ativo = $_POST['p_status'];
    $pro_img = $caminhoSalvar;

    echo $pro_img;

    $query = "INSERT INTO produtos (pro_nome, pro_desc, pro_cat, pro_valor, pro_desconto, pro_ativo, pro_img)
              VALUES ('$pro_nome', '$pro_desc', '$pro_cat', '$pro_valor', '$pro_desconto', '$pro_ativo', '$pro_img')";

     $insert = mysqli_query($conexao,$query);

    echo $query;

    /*if($insert){
        $_SESSION['msg'] = "<p style='color:green;'>Produto adicionado com sucesso!</p>";
        header("Location: /mercado-paid-egua/HTML/admin/products.php");
        die();
      }else{
        $_SESSION['msg'] = "<p style='color:red;'>Erro! o produto não foi gravado com sucesso!</p>";
        header("Location: /mercado-paid-egua/HTML/admin/add_product.php");
        die();
      }*/

    /*$pro_img = $_POST['p_img'];
    if(isset($_POST['salvar_produto'])):
      $formatosPermitidos = array("png", "jpg", "jpeg");
      $extensao = pathinfo($_FILES['p_img']['name'], PATHINFO_EXTENSION);

      echo $extensao;

    endif;*/

    
?>