<?php

if(!empty($_GET['id']))
{

    include_once('BANCO/conexao.php'); 

    $id = $_GET['id'];

    $sqliSelect = "SELECT * FROM cadastro WHERE id=$id";

    $result = $conexao -> query($sqliSelect);

    if($result-> num_rows > 0)
    {
        $sqlDelte = "DELETE FROM cadastro WHERE id = $id";
        $resultDelete = $conexao -> query($sqlDelte);

    }
}

header('Location:estoque_cadastro.php');


?>