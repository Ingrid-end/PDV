<?php
include('../include/BANCO/conexao.php');

if(isset($_POST['enviar_edit_estoque_cadastro']))
{

    $id_cliente = $_POST['id_cliente'];
    $problema = $_POST['problema'];
    $mao_de_obra = $_POST['mao_de_obra'];
    $id_produto = $_POST['id_produto'];
    $preço_de_venda = $_POST['preço_de_venda'];
    $garantia_id = $_POST['garantia_id'];

    $sqlUpDate = "UPDATE caixa SET id_cliente = '$id_cliente', problema = '$problema', mao_de_obra = '$mao_de_obra', id_produto = '$id_produto',  preço_de_venda = '$preço_de_venda', garantia_id = '$garantia_id'  WHERE id = '$id'";

    $result= $conexao -> query($sqlUpDate);

}

?>

