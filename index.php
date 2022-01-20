<!-- CAIXA -->
<!DOCTYPE html>
<?php 
//Cabeçalho do software
include("INCLUDE/head.php"); 
?>
<html lang="pt-br">
    <body>
        <br>
    

        <center>
        <h1 class="font_titulos tamanho_titulo">Auto Peças e Mecanica Palmeiras</h1>

        <div class="responsividade_dois">
        <div class="form_index">
            <!-- Formulario de entrada e saida de produtos ou mão de obra -->
            <form method="POST"  action="alterando_senha">

                <!-- Gerando data e hora atual -->
                <?php
				//Gerando data atual
				date_default_timezone_set('America/Sao_Paulo');
				$hora = date('H:i');
				$data = date('d/m/Y');
				?>
                

                <h2 class="font_titulos">Cadastro de cliente</h2>    

            <div class="label-float">
  			<input  type="text" name=""  placeholder=" " >
 			 <label>Cliente: </label>
			</div>

            <br>

            <div class="label-float">
  			<input  type="text" onkeyup="mascara( this, mtel );" maxlength="15" name=" "  placeholder=" " >
 			 <label>Telefone: </label>
			</div>

            <br>

            <h2 class="font_titulos">Carro:</h2>

            <div class="label-float">
                <select class="tamanho_select"  name=" "  id=" ">
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
  			<input  type="text" name=" "  placeholder=" " >
 			 <label>Modelo: </label>
			</div>

            <br>

            <div class="label-float">
  			<input  type="text" name=" "  placeholder=" " >
 			 <label>ano: </label>
			</div>

            <br>

            <!-- <label class="label_select">Local:</label> -->
                <!-- Selecionando o problema -->
    <div class="label-float">

            <select class="tamanho_select" name="problema" required="required" id="shipping-method">
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
                        <textarea name=" " id=teste class="comentario font" placeholder=" Descrião mão e obra e espécificação" maxlength="300"></textarea>
                </div>

                <br>
                <br>
                <br>
                <br>

                
                <div class="label-float">
  			        <input  type="number" name=""  placeholder=" " >
 			        <label>Preço: </label>
			    </div>

                <br>
                <br>
              

                <!-- enviar -->
                <button class="botao_caixa" type="submit" name="solicitar" value="Solicitar">CADASTRAR</button>
             
           
        </form>   
        </div>

        <div class="form_index">
            
            <!-- Formulario de entrada e saida de produtos ou mão de obra -->
            <form method="POST" action="alterando_senha">
                <p></p>
                <h2 class="font_titulos">Caixa</h2>

            <div class="label-float">
  			<input  type="text" name=" "  placeholder=" " >
 			 <label>Produto: </label>
			</div>

            <br>

            <div class="label-float">
  			<input  type="text" name=" "  placeholder=" " >
 			 <label>Mão de obra: </label>
			</div>

            <br>

            <div class="label-float">
  			<input  type="number" name=" "  placeholder=" " >
 			 <label>Preço: </label>
			</div>

            <br>
            <br>

            <input type="submit" value="ENVIAR" class="botao_caixa" >
            </form>
        </div>

         <a href="estoque.php" class="a_estoque">ESTOQUE</a>

        </div>
        </center>

        <?php 
//Rodapé do software
include("INCLUDE/footer.php"); 
?>
    </body>
</html>