<?php

    include('conexao.php');

        $pro_nome = $_POST['p_nome'];
        $pro_desc =  $_POST['p_desc'];
        //$pro_cat = $_POST['p_cat'];
        $pro_valor = $_POST['p_valor'];
        //$pro_desconto = $_POST['p_desconto'];
        //$pro_ativo = $_POST['status'];

        $query = "INSERT INTO produtos (pro_nome, pro_desc, pro_valor)
                VALUES ('$pro_nome', '$pro_desc', '$pro_valor')";

        $insert = mysqli_query($conexao,$query);

       // $db->query($SQL) or die("Query Falhou");




?>