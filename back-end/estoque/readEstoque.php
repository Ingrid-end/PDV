<?php
// traz a lista de todos os Produtos como uma array
function listaProdutos(){

    include(dirname(__DIR__,1).'/include/BANCO/conexao.php');


    $result_produto = mysqli_query($conexao, "SELECT * FROM entrada_estoque");


    return $result_produto -> fetch_all(MYSQLI_ASSOC);

}

     
?>

