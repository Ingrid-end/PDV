<?php
include('../include/BANCO/conexao.php');

                                          //PESQUISA
if(!empty($_GET['pesquisa_efetuado']))
{
    $data = $_GET['pesquisa_efetuado'];
    $sql = "SELECT * FROM caixa WHERE id LIKE '%$data%' or id_cliente LIKE '%$data%' or problema LIKE '%$data%' ORDER BY id DESC";
}
else
{
    $sql = "SELECT * FROM caixa ORDER BY id DESC";
}
$resultado_caixa = $conexao -> query($sql);

?>

  
