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

                                            // CLIENTE
                                            
if(isset($_POST['enviar_cadastro']))
{

    $cliente = $_POST['cliente'];
    $telefone = $_POST['telefone'];
    $carro = $_POST['carro'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];

    $result_cliente = mysqli_query($conexao, "INSERT INTO cadastro(cliente,telefone,carro,modelo,ano) 
    VALUES ('$cliente','$telefone','$carro','$modelo','$ano')");

}


                                        // PESQUISA
if(!empty($_GET['search_cadastro']))
{
    $data_cliente = $_GET['search_cadastro'];
    $sql_cadastro = "SELECT * FROM cadastro WHERE id LIKE '%$data_cliente%' or cliente LIKE '%$data_cliente%' or modelo LIKE '%$data_cliente%' or carro LIKE '%$data_cliente%' ORDER BY id DESC";
}
else
{
    $sql_cadastro = "SELECT * FROM cadastro ORDER BY id DESC";
}
$resultado_cadastro = $conexao->query($sql_cadastro);




                                    //PRODUTO



if(isset($_POST['enviar_entrada_estoque']))
{

    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $condicao = $_POST['condicao'];
    $garantia = $_POST['garantia'];
    $marca = $_POST['marca'];
    $preco_de_compra = $_POST['preco_de_compra'];
 


    $result = mysqli_query($conexao, "INSERT INTO entrada_estoque(produto,quantidade,condicao,garantia,marca,preco_de_compra) 
    VALUES ('$produto','$quantidade','$condicao','$garantia','$marca','$preco_de_compra')");

}




                                            //PESQUISA
if(!empty($_GET['search']))
{
    $data = $_GET['search'];
    $sql = "SELECT * FROM entrada_estoque WHERE id LIKE '%$data%' or produto LIKE '%$data%' or marca LIKE '%$data%' ORDER BY id DESC";
}
else
{
    $sql = "SELECT * FROM entrada_estoque ORDER BY id DESC";
}
$resultado_entrada_estoque = $conexao -> query($sql);






?>



