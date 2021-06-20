<?php

        include('conexao.php');

        $delete_id = $_GET['c_id'];

        $query = "DELETE from categorias WHERE cat_id = '$delete_id' ";

        $insert = mysqli_query($conexao,$query);

        echo $query;

        if($insert){
            $_SESSION['msg'] = "<p style='color:green;'>Produto adicionado com sucesso!</p>";
            header("Location: /mercado-paid-egua/HTML/admin/category.php");
            die();
        }else{
            $_SESSION['msg'] = "<p style='color:red;'>Erro! o produto não foi gravado com sucesso!</p>";
            header("Location: /mercado-paid-egua/HTML/admin/category.php");
            die();
        }

?>