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
            <form method="POST" action="index.php">
            <h2 class="font_titulos">Caixa</h2>    

            <div class="label-float">
                <select name="id_cliente"  class="tamanho_select">
                    <option value="">Cliente</option>

                    <?php
                    $result_banco_cadastro="SELECT * FROM cadastro ORDER BY cliente";
                    $resultado_banco_cadastro = mysqli_query($conexao, $result_banco_cadastro);
                    while($algo = mysqli_fetch_assoc($resultado_banco_cadastro)){
                        echo '<option value=" '.$algo['cliente'].' ">'.$algo['cliente'].'</option>';
                    }
                    ?>
                    
                </select>
			</div>

            <br>

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
                        <textarea name="cometatio_especifico" id=teste class="comentario font" placeholder=" Descrião mão e obra e espécificação" maxlength="300"></textarea>
                </div>

                <br>
                <br>
                <br>
                <br>
            <br>

            <div class="label-float">
  			<input  type="text" name="mao_de_obra"  placeholder=" " >
 			 <label>Mão de obra: </label>
			</div>

            <br>

            <div class="label-float">
                <select name="id_produto"  class="tamanho_select">
                    <option value="">Produto</option>

                    <?php
                    $result_banco_estoque="SELECT * FROM entrada_estoque ORDER BY produto";
                    $resultado_banco_estoque = mysqli_query($conexao, $result_banco_estoque);
                    while($algo_estoque = mysqli_fetch_assoc($resultado_banco_estoque)){
                        echo '<option value=" '.$algo_estoque['produto'].' ">'.$algo_estoque['produto'].'</option>';
                    }
                    ?>
                    
                </select>
			</div>

            

            <div class="label-float">
  			<input  type="text" name="preço_de_venda"  placeholder=" " >
 			 <label>Preço de venda:: </label>
			</div>

            <br>
            <br>
            <input type="submit" value="ENVIAR" name="salvar_caixa" class="botao_caixa" >
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