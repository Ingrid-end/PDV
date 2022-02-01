<?php
include('../include/BANCO/conexao.php');

if(isset($_POST['salvar_caixa']))
{
    $id_cliente = $_POST['id_cliente'];
    $problema = $_POST['problema'];
    $mao_de_obra = $_POST['mao_de_obra'];
    $id_produto = $_POST['id_produto'];
    $preço_de_venda = $_POST['preço_de_venda'];
    $garantia_id = $_POST['garantia_id'];

   
    $result = mysqli_query($conexao, "INSERT INTO caixa(id_cliente,problema,mao_de_obra,
    id_produto,preço_de_venda,garantia_id)
    VALUES ('$id_cliente','$problema','$mao_de_obra','$id_produto','$preço_de_venda',$garantia_id')");

}


?>