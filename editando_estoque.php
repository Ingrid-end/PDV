<?php

include_once('BANCO/conexao.php'); 

if(!empty($_GET['id']))
{
$id = $_GET['id'];

$sqliSelect = "SELECT * FROM cadastro WHERE id=$id";

    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $condicao = $_POST['condicao'];
    $garantia = $_POST['garantia'];
    $marca = $_POST['marca'];
    $preco_de_compra = $_POST['preco_de_compra'];
    $preco_de_venda = $_POST['preco_de_venda'];
    $lucro = $_POST['lucro'];

$resultado = $conexao -> query($sqliSelect);

print_r($resultado);

}

?>

<!-- CAIXA -->
<!DOCTYPE html>
<?php 
//Cabeçalho do software
include("INCLUDE/head.php"); 


?>
<html lang="pt-br">
    <body>
        <br>
        <a href="index.php" class="a_estoque">CAIXA</a>
            <br>
            <br>

            <a href="estoque.php" class="a_estoque" style="margin-top: 8%;"> ESTOQUE</a>


        <center>
        <h1 class="font_titulos tamanho_titulo">Auto Peças e Mecanica Palmeiras</h1>

        <div class="responsividade_dois">
        <div class="form_index">
            
            <!-- Formulario de entrada e saida de produtos ou mão de obra -->
            <form method="POST" action="entrada_estoque.php">
                <p></p>
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

            <div class="label-float">
  			<input  type="text" name="preco_de_venda"  placeholder=" " >
 			 <label>Preço de Venda: </label>
			</div>

            <br>

            <!-- Resultado em PHP -->
            <div class="label-float">
  			<input  type="number" name="lucro"  placeholder=" " >
 			 <label>Lucro: </label>
			</div>

            <br>
            <br>

            <input type="submit" value="ENVIAR" name="enviar_entrada_estoque" class="botao_caixa" >
            </form>
        </div>




        
        </div>
        </center>

        <?php 
//Rodapé do software
include("INCLUDE/footer.php"); 
?>
    </body>
</html>