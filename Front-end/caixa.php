 <head>
    <!-- RESPONSIVIDADE -->
    <meta name="viewport"t conent="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">


        <!-- FOLHA DAS VARIAVEIS -->
        <link rel="stylesheet" type="text/css" href="./Front-end/CSS/variaveis.css">
        <!-- FOLHA DE ESTILO -->
        <link rel="stylesheet" type="text/css" href="./Front-end/CSS/estilo.css">
        <!-- FOLHA DO MENU -->
        <link rel="stylesheet" type="text/css" href="./Front-end/CSS/menu.css">
        <!-- FOLHA DE PESQUISA -->
        <link rel="stylesheet" type="text/css" href="./Front-end/CSS/pesquisa.css">
        <!-- icone na janela -->
        <link rel="shortcut icon" href="IMG/caixa-de-ferramentas.png">
    
        <title>Auto peças Palmeiras</title>

      <!-- Font do Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100&family=Open+Sans+Condensed:wght@300&family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
        <div class="table_center">
            <div class="drop-down">
                <!-- NOME  -->
                    <div id="dropDown" class="drop-down__button">
                        <span class="drop-down__name">Menu</span>
                    </div>
                    
                <div class="drop-down__menu-box">
                    <ul class="drop-down__menu">
                        <a href="./Front-end/caixa.php"> <li class="drop-down__item">Caixa</li> </a>
                        <a href="./Front-end/listaEstoque.php"><li class="drop-down__item">Estoque</li></a>
                        <a href="./Front-end/createCadastroEstoque.php"><li class="drop-down__item"> Cadastrar Produtos</li></a>
                        <a href="./Front-end/listaCliente.php"><li class="drop-down__item">Cadastro Clientes </li></a>
                        <a href="./Front-end/createCadastroCliente.php"><li class="drop-down__item"> Cadastrar Clientes</li></a>
                        <a href="./Front-end/listaCaixa.php"><li class="drop-down__item">Serviços Efetuados</li></a>
                        <a href="./Front-end/listaServicos.php"> <li class="drop-down__item">Mão de Obra</li> </a>
                    </ul>
                </div>
            </div>
        </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script>
    $(document).ready(function(){
  $('#dropDown').click(function(){
    $('.drop-down').toggleClass('drop-down--active');
  });
});
</script>
<!-- CAIXA -->
<!DOCTYPE html>
<?php 
include(dirname(__DIR__,1).'/back-end/clientes/readCliente.php');
$listaClientes = listaClientes();

include(dirname(__DIR__,1).'/back-end/estoque/readEstoque.php');
$listaProdutos = listaProdutos();

?>
<html lang="pt-br">
    <body>
       
        <center>
        <h1 class="font_titulos tamanho_titulo">Caixa</h1>

        <div class="responsividade_dois">
            <div class="form_index">
            
                <!-- Formulario de entrada e saida de produtos ou mão de obra -->
                <form method="POST" action="../back-end/opCaixa/insereServico.php">

                    <div class="label-float">
                                <select name="form_caixa_cliente"  class="tamanho_select">
                                    <option value="">Cliente</option>

                                    <?php
                                        foreach($listaClientes as $cliente){
                                            echo '<option value=" '.$cliente['cliente'].' ">'.$cliente['cliente'].'</option>';
                                        }
                                    ?>
                                    
                                </select>
                            </div>

                        <br>

                        <div class="label-float">

                                <select class="tamanho_select" name="form_caixa_problema" required="required" id="shipping-method">
                                        <option disabled=" " selected="selected" style="display: none;">Selecionar o problema</option>
                                        <option class="opçao" id="desativar" >Pastilha</option>
                                        <option class="opçao2" id="desativar">Trocar PNEU</option>
                                        <option class="opçao" id="desativar">Câmbio</option>
                                    </optgroup>
                                    
                                    <optgroup label="Motor">
                                        <option class="opçao" id="desativar">Cabeçote</option>
                                    <option class="opçao2" id="desativar">Motor inteiro</option>
                                    </optgroup>

                                        <optgroup label="mais opçoes">
                                        <option value="option1" class="opçao"> Específico</option>
                                    </optgroup>

                                </select>
                                        <label class="label_select">Descrição: </label>
                            
                                </div>
                                    <!-- Descrição -->
                                    <input type="radio" id="flatrate" class="radio">
                                        <div class="checkbox">
                                            <!-- Caixa de texto para descrever problema -->
                                            <textarea name="cometatio_especifico" id=teste class="comentario font" placeholder=" Descrião mão e obra e espécificação" maxlength="300"></textarea>
                                        </div>

                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                        </div>

                    <div class="form_index">

                        <div class="lista_produtos">
                            <div class="div_produto">
                                <button id="form_caixa_adicionar_produto" class="botao botao_adicionar_lado">Adicionar</button>

                                <div class="label-float">
                                    <input  type="text" name="form_caixa_mao_de_obra[]"  placeholder=" " >
                                    <label>Mão de obra: </label>
                                </div>

                                <br>

                                <div class="label-float">
                                    <input  type="text" name="form_caixa_garantia[]"  placeholder=" " >
                                    <label>Garantia: </label>
                                </div>

                                <br>
                            
                            
                                <div class="label-float">
                                    <select name="form_caixa_produto[]"  class="tamanho_select">
                                        <option value="">Produto</option>

                                        <?php
                                            foreach($listaProdutos as $produto){
                                                echo '<option value=" '.$produto['produto'].' ">'.$produto['produto'].'</option>';
                                            }
                                        ?>
                                        
                                    </select>
                                </div>

                                <br>

                                <div class="label-float">
                                    <input  type="text" name="form_caixa_quantidade[]"  placeholder=" ">
                                    <label>Quantidade: </label>
                                </div>

                                <br>
                            

                                <div class="label-float">
                                    <input  type="text" name="form_caixa_preco[]"  placeholder=" " >
                                    <label>Preço de venda: </label>
                                </div>

                            </div>
                        </div>
                    </div>


            <br>
            <br>
            <input type="submit" value="ENVIAR" name="salvar_caixa" class="botao botao_caixa">
            </form>
        </div>




        
        <!-- </div> -->
        </center>

        <?php 
include("Common/scripts.php");

//Rodapé do software
include("Common/footer.php"); 
?>
<script>
$("#form_caixa_adicionar_produto").click(function(e){
    e.preventDefault();
    $(".div_produto").clone().appendTo(".lista_produtos");
});
</script>
    </body>
</html>