<?php
include('../include/BANCO/conexao.php');

if(isset($_POST['enviar_cadastro']))
{
    $cliente = $_POST['cliente'];
    $telefone = $_POST['telefone'];
    $carro = $_POST['carro'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];

   
    $result = mysqli_query($conexao, "INSERT INTO cadastro(cliente,telefone,carro,modelo,ano)
    VALUES ('$cliente','$telefone','$carro','$modelo','$ano')");

}


?>