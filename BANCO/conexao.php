<?php

 $dbHost = 'Localhost';
 $dbUsername = 'root';
 $dbPassaword = '';
 $dbName = 'PDV';

 $conexao = new mysqli($dbHost,  $dbUsername, $dbPassaword, $dbName);

 // Vlw Luccas >.<
//  if ($conexao == true) {
//     echo "<p style='color: green'>Conectado ao banco de dados!!</p>";
// }
// else {
//     echo "<p style='color: red'>Não conectado ao banco de dados...</p>";
// }


if(isset($_POST['cadastro']))
{
    $cliente = $_POST['cliente'];
    $telefone = $_POST['telefone'];
    $carro = $_POST['carro'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $problema = $_POST['problema'];
    $preco_cadastro = $_POST['preco_cadastro'];

    $cadastro_bd = mysqli_query($conexao, "INSERT INTO cadastro(cliente,telefone,marca,modelo,ano, descricao,preco) 
    VALUES ('$cliente', '$telefone','$carro','$modelo', '$ano', '$problema', '$preco_cadastro')");
}

if(isset($_POST['enviar_entrada_estoque']))
{
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $condicao = $_POST['condicao'];
    $garantia = $_POST['garantia'];
    $marca = $_POST['marca'];
    $preco_de_compra = $_POST['preco_de_compra'];
    $preco_de_venda = $_POST['preco_de_venda'];
    $lucro = $_POST['lucro'];

    $result = mysqli_query($conexao, "INSERT INTO entrada_estoque(produto,quantidade,condicao,garantia,marca, preco_de_compra,preco_de_venda, lucro) 
    VALUES ('$produto', '$quantidade','$condicao','$garantia', '$marca', '$preco_de_compra', '$preco_de_venda', '$lucro')");
}
if(!empty($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM entrada_estoque WHERE id LIKE '%$data%' or produto LIKE '%$data%' or marca LIKE '%$data%' ORDER BY id DESC";
}
else
{
    $sql = "SELECT * FROM entrada_estoque ORDER BY id DESC";
}


// $sql = "SELECT * FROM  entrada_estoque ORDER BY id DESC";

$resultado_entrada_estoque = $conexao -> query($sql);

// print_r($resultado);



?>