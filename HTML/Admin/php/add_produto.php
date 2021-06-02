<?php

    include('conexao.php');

        $pro_nome = $_POST['p_nome'];
        $pro_desc =  $_POST['p_desc'];
        $pro_cat = $_POST['p_cat'];
        $pro_valor = $_POST['p_valor'];
        $pro_desconto = $_POST['p_desconto'];
        $pro_ativo = $_POST['status'];

        $SQL = "INSERT INTO produtos (pro_nome, pro_desc, pro_cat, pro_valor, pro_desconto, pro_ativo)
                VALUES ('$pro_nome','$pro_desc','$pro_cat','$pro_valor', '$pro_desconto', '$pro_ativo') ";

        $db->query($SQL) or die("Query Falhou");

        header("Location: Admin/products.html")



?>