<!-- CAIXA -->
<!DOCTYPE html>
<?php 
//Cabeçalho do software
include(dirname(__DIR__)."./Front-end/common/head.php");

include(dirname(__DIR__,1).'/back-end/estoque/readEstoque.php');

?>
<html lang="pt-br">
    <body>

        <center>
        <h1 class="font_titulos tamanho_titulo">Auto Peças e Mecanica Palmeiras</h1>

        <div class="responsividade_dois">
        <div class="form_index">
            
            <!-- Formulario de entrada e saida de produtos ou mão de obra -->
            <form method="POST" action="createCadastroEstoque.php">
            <h2 class="font_titulos">Cadastrar Produto</h2>    

                <h2 class="font_titulos">Entrada</h2>

            <div class="label-float">
  			<input  type="text" name="produto"  placeholder=" " >
 			 <label>Produto: </label>
			</div>

            <br>

            <div class="label-float">
  			<input  type="text" name="quantidade"  placeholder=" " >
 			 <label>Quantidade: </label>
			</div>

            <br>
            
            <div class="label-float">
  			<input  type="text" name="condicao"  placeholder=" " >
 			 <label>Condição: </label>
			</div>

            <br>

            <div class="label-float">
  			<input  type="text" name="garantia"  placeholder=" " >
 			 <label>Garantia: </label>
			</div>
           
            <br>

            <div class="label-float">
  			<input  type="text" name="marca"  placeholder=" " >
 			 <label>Marca: </label>
			</div>
           
            <br>
            
           
            <div class="label-float">
  			<input  type="text" name="preco_de_compra"  placeholder=" " >
 			 <label>Preço de Compra: </label>
			</div>

            <br>

           

            <br>
            <br>

            <input type="submit" value="ENVIAR" name="enviar_entrada_estoque" class="botao botao_caixa" >
            </form>
        </div>




        
        </div>
        </center>

        <?php 
include("Common/scripts.php");

//Rodapé do software
include("Common/footer.php"); 
?>
    </body>
</html>