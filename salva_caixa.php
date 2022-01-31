<?php
include_once('BANCO/conexao.php');

if(isset($_POST['salvar_caixa']))
{

    $id = $_POST['id'];
    $id_cliente = $_POST['id_cliente'];
    $problema = $_POST['problema'];
    $mao_de_obra = $_POST['mao_de_obra'];
    $id_produto = $_POST['id_produto'];
    $preço_de_venda = $_POST['preço_de_venda'];


    $sqlUpDate = "UPDATE caixa SET id_cliente = '$id_cliente', problema = '$problema',
     mao_de_obra = '$mao_de_obra', id_produto = '$id_produto',  preço_de_venda = '$preço_de_venda'  
     WHERE id = '$id'";

    $result= $conexao -> query($sqlUpDate);

}
 
header('Location:index.php');

?>

