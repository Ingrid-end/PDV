<?php
include_once('BANCO/conexao.php'); 

if(!empty($_GET['id']))
{
$id = $_GET['id'];

$sqliSelect = "SELECT * FROM entrada_estoque WHERE id=$id";

$result = $conexao -> query($sqliSelect);

if($result-> num_rows > 0)
{

    while($user_data = mysqli_fetch_assoc($result)){

        $produto = $user_data['produto'];
        $quantidade = $user_data['quantidade'];
        $condicao = $user_data['condicao'];
        $garantia = $user_data['garantia'];
        $marca = $user_data['marca'];
        $preco_de_compra = $user_data['preco_de_compra'];
   

    }
}
else
{
    header('Location:estoque.php');
}
}
else{
    header('Location:estoque.php');

}



// print_r($resultado);
?>

<!-- CAIXA -->
<!DOCTYPE html>
<?php 
//Cabeçalho do software
include("INCLUDE/head.php"); 


?>
<html lang="pt-br">
    <body>
   

        <center>
        <h1 class="font_titulos tamanho_titulo">Auto Peças e Mecanica Palmeiras</h1>

        <div class="responsividade_dois">
        <div class="form_index">
            
            <!-- Formulario de entrada e saida de produtos ou mão de obra -->
            <form method="POST" action="save_edit.php">
                <p></p>
                <h2 class="font_titulos">Editando Produto</h2>

            <div class="label-float">
  			<input  type="text" name="produto" value="<?php echo $produto ?>" placeholder=" " >
 			 <label>Produto: </label>
			</div>

            <br>

            <div class="label-float">
  			<input  type="text" name="quantidade"  value="<?php echo $quantidade ?>" placeholder=" " >
 			 <label>Quantidade: </label>
			</div>

            <br>
            
            <div class="label-float">
  			<input  type="text" name="condicao" value="<?php echo $condicao ?>"  placeholder=" " >
 			 <label>Condição: </label>
			</div>

            <br>

            <div class="label-float">
  			<input  type="text" name="garantia"  value="<?php echo $garantia ?>"  placeholder=" " >
 			 <label>Garantia: </label>
			</div>
           
            <br>

            <div class="label-float">
  			<input  type="text" name="marca"   value="<?php echo $marca ?>" placeholder=" " >
 			 <label>Marca: </label>
			</div>
           
            <br>
            
           
            <div class="label-float">
  			<input  type="text" name="preco_de_compra"  value="<?php echo $preco_de_compra ?>" placeholder=" " >
 			 <label>Preço de Compra: </label>
			</div>

            <br>

            <br>
            <br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" value="ENVIAR" name="enviar_edit_estoque" class="botao_caixa" >
            </form>
        </div>

        <br>
   


        
        </div>
        </center>

        <?php 
//Rodapé do software
include("INCLUDE/footer.php"); 
?>
    </body>
</html>