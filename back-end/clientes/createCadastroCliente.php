
<!-- CAIXA -->
<!DOCTYPE html>
<?php 
//Cabeçalho do software
include("INCLUDE/head.php"); 

//BD do software
include("BANCO/conexao.php"); 

?>

<html lang="pt-br">
    <body>

        <center>
        <h1 class="font_titulos tamanho_titulo">Auto Peças e Mecanica Palmeiras</h1>

        <div class="responsividade_dois">
        <div class="form_index">
            <!-- Formulario de entrada e saida de produtos ou mão de obra -->
            <form method="POST"  action="cadastro_cliente.php">

            

                <h2 class="font_titulos">Cadastro de cliente</h2>    

            <div class="label-float">
  			<input  type="text" name="cliente"  placeholder=" " >
 			 <label>Cliente: </label>
			</div>

            <br>

            <div class="label-float">
  			<input  type="text" onkeyup="mascara( this, mtel );" maxlength="15" name="telefone"  placeholder=" " >
 			 <label>Telefone: </label>
			</div>

            <br>

            <h2 class="font_titulos">Carro:</h2>

            <div class="label-float">
                <select class="tamanho_select"  name="carro">
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
  			<input  type="text" name="modelo"  placeholder=" " >
 			 <label>Modelo: </label>
			</div>

            <br>

            <div class="label-float">
  			<input  type="number" name="ano"  placeholder=" " >
 			 <label>ano: </label>
			</div>

            <br>

          

                <br>
                <br>
              

                <!-- enviar -->
                <button class="botao_caixa" type="submit" name="enviar_cadastro">CADASTRAR</button>
             
           
        </form>   
        </div>

        </center>

        <?php 
//Rodapé do software
include("INCLUDE/footer.php"); 
?>
    </body>
</html>



    