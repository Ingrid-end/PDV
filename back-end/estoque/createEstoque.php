<?php
include('../include/BANCO/conexao.php');

if(isset($_POST['enviar_entrada_estoque']))
{
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $condicao = $_POST['condicao'];
    $garantia = $_POST['garantia'];
    $marca = $_POST['marca'];
    $preco_de_compra = $_POST['preco_de_compra'];
    

   
    $result = mysqli_query($conexao, "INSERT INTO entrada_estoque(id_cliente,problema,mao_de_obra,
    id_produto,preço_de_venda,garantia_id)
    VALUES ('$id_cliente','$problema','$mao_de_obra','$id_produto','$preço_de_venda',$garantia_id')");

}

?>