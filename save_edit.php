<?php
include_once('BANCO/conexao.php');

if(isset($_POST['enviar_edit_estoque']))
{
    $id = $_POST['id'];
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $condicao = $_POST['condicao'];
    $garantia = $_POST['garantia'];
    $marca = $_POST['marca'];
    $preco_de_compra = $_POST['preco_de_compra'];
    $preco_de_venda = $_POST['preco_de_venda'];
    $lucro = $_POST['lucro'];

    $sqlUpDate = "UPDATE entrada_estoque SET produto = '$produto', quantidade = '$quantidade', condicao = '$condicao', garantia = '$garantia', marca = '$marca',  preco_de_compra = '$preco_de_compra',
    preco_de_venda = '$preco_de_venda',   lucro = '$lucro' WHERE id = '$id'";

    $result= $conexao -> query($sqlUpDate);

}
 
header('Location:estoque.php');

?>