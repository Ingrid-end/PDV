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
        
        <div class="form-pesquisa">
                    <h2 class="font_titulos">Serviço Efetuado</h2>
            <input type="search" placeholder="Buscar nesta lista" id="pesquisa" class="pesquisa" />
           <!-- Chamar a função searchData usando onclick -->
            <button onclick="searchData()" class="botao_pesquisa atender">
                <img class="img-preta" src="IMG/lupa.png" alt="Lupa pesquisa"> 
            </button>
        </div>

        <div class="responsividade_dois">
            <div class="grid">
                <div class="grid-container">
                    <table border="1" class="tabela">

                        <tr class="linha">
                            <td class="headertabela ">
                                <center><b>Cod</b></center>
                            </td>
                            <td class="headertabela">
                                <center><b>Cliente</b></center>
                            </td>
                            <td class="headertabela ">
                                <center><b>Produto</b></center>
                            </td>
                             <td class="headertabela ">
                                <center><b>Mão de Obra</b></center>
                            </td>
                            <td class="headertabela">
                                <center><b>Descrição</b></center>
                            </td>
                            <td class="headertabela ">
                                <center><b>Garantia</b></center>
                            </td>
                            <td class="headertabela">
                                <center><b>lucro</b></center>
                            </td>
                         
                            </td>
                        </tr>

                        <tbody class="tabela">
                        <?php
                        while($user_data = mysqli_fetch_array($resultado_entrada_estoque)){
                            echo "<tr class='linha'>";
                                echo "<td class='corpotabela'>".$user_data['id']."</td>";
                                echo "<td class='corpotabela'>".$user_data['cliente']."</td>";
                                echo "<td class='corpotabela'>".$user_data['produto']."</td>";
                                echo "<td class='corpotabela'>".$user_data['mao_de_obra']."</td>";
                                echo "<td class='corpotabela'>".$user_data['descricao']."</td>";
                                echo "<td class='corpotabela'>".$user_data['garantia']."</td>";
                                echo "<td class='corpotabela'>".$user_data['lucro']."</td>";

                            echo "</tr>";
                        }
                        ?>
                        </tbody>
                </table>
                            
            <br>
        </div>
    </center>
    </div>

  </div>
  
        </center>

        <?php 
//Rodapé do software
include("INCLUDE/footer.php"); 
?>
<br>
<br>
    </body>

    <script>
        // Vai amarzenar o Id Pesquisa
    var search = document.getElementById('pesquisa');

    // Esta "ouvindo" a tecla q o usuario clicar
    search.addEventListener("keydown", function(event) {
        // Se essa tecla for enter dai sim ele vai chamar a função
        if (event.key === "Enter") 
        {
            searchData();
        }
    });
        //Função  
    function searchData()
    {
        //Alterar a URL
        window.location = 'estoque.php?search='+search.value;
    }
</script>
</html>