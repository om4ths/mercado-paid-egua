<?php
$userbd = ('localhost');
$usuario = ('root');
$senha = ('');
$bd = ('mercado');
$conexao = mysqli_connect($userbd,$usuario,$senha,$bd) or die ('Não foi possível conectar');


include("conexao.php");

    $pesquisar = $_POST['pesquisar'];
    $result_produtos = "SELECT * FROM produtos WHERE pro_nome LIKE '%$pesquisar%' LIMIT 5";

    $resultado_produtos = mysqli_query($conn, $result_produtos);

    while($rows_produtos = mysqli_fetch_array($resultado_produtos)){
        echo "Nome do curso: ".$rows_produtos['pro_nome']."<br>";

    }




?>