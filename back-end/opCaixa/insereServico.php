<?php

$form_caixa_cliente = $_POST['form_caixa_cliente'];
$form_caixa_problema = $_POST['form_caixa_problema'];
$form_caixa_mao_de_obra = $_POST['form_caixa_mao_de_obra'];
$form_caixa_garantia = $_POST['form_caixa_garantia'];
$form_caixa_produto = $_POST['form_caixa_produto'];
$form_caixa_quantidade = $_POST['form_caixa_quantidade'];
$form_caixa_preco = $_POST['form_caixa_preco'];

// function guardaServico($cliente,$problema,$mao_de_obra, array $produtos, array $quantidades, array $precos){
    include(dirname(__DIR__,1).'/include/BANCO/conexao.php');

    $sql_servico = "INSERT INTO servicos (cliente,carro,problema,mao_de_obra,garantia) VALUES ('$form_caixa_cliente', '$form_caixa_cliente', '$form_caixa_problema', $form_caixa_mao_de_obra,$form_caixa_garantia)";

    $result_servico = mysqli_query($conexao, $sql_servico);

    // echo $sql_servico;
    // exit();
    
    if($result_servico){

        $id = mysqli_insert_id($conexao);

        $contador = 0;


     while($contador < count($form_caixa_produto)){

        $sql_produto_servico = "INSERT INTO servicos_produtos (id_servico,produto, quantidade, preco_de_compra, preco_de_venda) VALUES ($id, '$form_caixa_produto[$contador]', $form_caixa_quantidade[$contador], 0,  $form_caixa_preco[$contador])";

        echo $sql_produto_servico;
        $result_produtos_servicos =  mysqli_query($conexao, $sql_produto_servico);
        $contador++;
     }
        
    }

    // return $result_servico -> fetch_all(MYSQLI_ASSOC);

// }

// guardaServico()

?>