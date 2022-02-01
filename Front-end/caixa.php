
<!-- CAIXA -->
<!DOCTYPE html>
<?php 
include(dirname(__DIR__,1).'/back-end/clientes/readCliente.php');
$listaClientes = listaClientes();

include(dirname(__DIR__,1).'/back-end/estoque/readEstoque.php');
$listaProdutos = listaProdutos();

//Cabeçalho do software
include(dirname(__DIR__)."/Front-end/common/head.php"); 

?>
<html lang="pt-br">
    <body>
       
        <center>
        <h1 class="font_titulos tamanho_titulo">Auto Peças e Mecanica Palmeiras</h1>

        <div class="responsividade_dois">
        <div class="form_index">
            
            <!-- Formulario de entrada e saida de produtos ou mão de obra -->
            <form method="POST" action="../back-end/opCaixa/insereServico.php">
            <h2 class="font_titulos">Caixa</h2>    

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

            <div class="label-float">
  			<input  type="text" name="form_caixa_mao_de_obra"  placeholder=" " >
 			 <label>Mão de obra: </label>
			</div>

            <br>

            <div class="label-float">
  			<input  type="text" name="form_caixa_garantia"  placeholder=" " >
 			 <label>Garantia: </label>
			</div>

            <br>
        
            <div class="lista_produtos">
                <div class="div_produto">
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
            <br>

            <div class="label-float">
  			<input  type="text" name="form_caixa_preco[]"  placeholder=" " >
 			 <label>Preço de venda: </label>
			</div>

            </div>
            </div>
            <button id="form_caixa_adicionar_produto">adicionar produtos</button>
            <br>




            <br>
            <br>
            <input type="submit" value="ENVIAR" name="salvar_caixa" class="botao_caixa" >
            </form>
        </div>




        
        </div>
        </center>

        <?php 
include("Common/scripts.php");

//Rodapé do software
include("INCLUDE/footer.php"); 
?>
<script>
$("#form_caixa_adicionar_produto").click(function(e){
    e.preventDefault();
    $(".div_produto").clone().appendTo(".lista_produtos");
});
</script>
    </body>
</html>