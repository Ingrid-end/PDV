<?php
// traz a lista de todos os clientes como uma array
function listaClientes(){

    include(dirname(__DIR__,1).'/include/BANCO/conexao.php');


    $result_cliente = mysqli_query($conexao, "SELECT * FROM cadastro");


    return $result_cliente -> fetch_all(MYSQLI_ASSOC);

}
?>