<?php
include('../include/BANCO/conexao.php');

if(isset($_POST['enviar_edit_estoque_cadastro']))
{

    $id = $_POST['id'];
    $cliente = $_POST['cliente'];
    $telefone = $_POST['telefone'];
    $carro = $_POST['carro'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];

    $sqlUpDate = "UPDATE cadastro SET cliente = '$cliente', telefone = '$telefone', carro = '$carro', modelo = '$modelo',  ano = '$ano'  WHERE id = '$id'";

    $result= $conexao -> query($sqlUpDate);

}
 
header('Location:estoque_cadastro.php');

?>

