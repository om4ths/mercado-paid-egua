<?php

    include('conexao.php');

        $pro_nome = $_POST['p_nome'];
        $pro_desc =  $_POST['p_desc'];
        $pro_cat = $_POST['p_cat'];
        $pro_valor = $_POST['p_valor'];
        $pro_desconto = $_POST['p_desconto'];
        $pro_ativo = $_POST['p_status'];

        $query = "INSERT INTO produtos (pro_nome, pro_desc, pro_cat, pro_valor, pro_desconto, pro_ativo)
                VALUES ('$pro_nome', '$pro_desc', '$pro_cat', '$pro_valor', '$pro_desconto', '$pro_ativo')";

        $insert = mysqli_query($conexao,$query);

        echo $query;

        if($insert){
            $_SESSION['msg'] = "<p style='color:green;'>Produto adicionado com sucesso!</p>";
            header("Location: /mercado-paid-egua/HTML/admin/products.php");
            die();
          }else{
            $_SESSION['msg'] = "<p style='color:red;'>Erro! o produto não foi gravado com sucesso!</p>";
            header("Location: /mercado-paid-egua/HTML/admin/add_product.php");
            die();
          }

    //if(isset($_POST['salvar_produto']))


?>