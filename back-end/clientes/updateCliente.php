<?php
include_once('BANCO/conexao.php'); 

if(!empty($_GET['id']))
{
$id = $_GET['id'];

$sqliSelect = "SELECT * FROM cadastro WHERE id=$id";

$result = $conexao -> query($sqliSelect);

if($result-> num_rows > 0)
{

    while($user_data = mysqli_fetch_assoc($result)){

        $cliente = $user_data['cliente'];
        $telefone = $user_data['telefone'];
        $carro = $user_data['carro'];
        $modelo = $user_data['modelo'];
        $ano = $user_data['ano'];
    }
}
else
{
    header('Location:estoque_cadastro.php');
}
}
else{
    header('Location:estoque_cadastro.php');

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
            <form method="POST" action="save_edit_cadastro.php">
                <p></p>
                <h2 class="font_titulos">Editando Cadastro</h2>

            <div class="label-float">
  			<input  type="text" name="cliente" value="<?php echo $cliente ?>" placeholder=" " >
 			 <label>cliente: </label>
			</div>

            <br>

            <div class="label-float">
  			<input  type="tex"  onkeyup="mascara( this, mtel );" maxlength="15" name="telefone"  value="<?php echo $telefone ?>" placeholder=" " >
 			 <label>telefone: </label>
			</div>

            <br>
            <h2 class="font_titulos">Carro:</h2>

            <div class="label-float">
            <select class="tamanho_select"  name="carro" value="<?php echo $carro ?>">
                    <option disabled=" " selected="selected" style="display: none;">Selecionar a marca:</option>
                    <option class="opçao" id="desativar" >Volkswagen</option>
                    <option class="opçao2" id="desativar">Toyota</option>
                    <option class="opçao" id="desativar">Renault Nissan</option>
                    <option class="opçao2" id="desativar">Hyundai-Kia</option>
                    <option class="opçao" id="desativar">Honda</option>
                    <option class="opçao2" id="desativar">Ford</option>
                    <option class="opçao" id="desativar"> Peugeot</option>
                    <option class="opçao2" id="desativar"> Fiat </option>
                    <option class="opçao" id="desativar"> Audi </option>
                </optgroup>
                </select>
			</div>

            <br>

            <div class="label-float">
  			<input  type="text" name="modelo"  value="<?php echo $modelo ?>"  placeholder=" " >
 			 <label>Modelo: </label>
			</div>
           
            <br>

            <div class="label-float">
  			<input  type="text" name="ano"   value="<?php echo $ano ?>" placeholder=" " >
 			 <label>Ano: </label>
			</div>            
           

            <br>

            <br>
            <br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" value="ENVIAR" name="enviar_edit_estoque_cadastro" class="botao_caixa" >
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