<!-- CAIXA -->
<!DOCTYPE html>
<?php 
//Cabeçalho do software
include("../INCLUDE/head.php"); 

//BD do software
include("include/BANCO/conexao.php"); 
?>
<html lang="pt-br">
    <body>
      
        <center>
        <h1 class="font_titulos tamanho_titulo">Auto Peças e Mecanica Palmeiras</h1>
        
        <div class="form-pesquisa">
                    <h2 class="font_titulos">ESTOQUE</h2>
            <input type="search" class="pesquisa" placeholder="Buscar nesta lista" id="pesquisa" />
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
                                <center><b>Produto</b></center>
                            </td>
                            <td class="headertabela ">
                                <center><b>QTD</b></center>
                            </td>
                             <td class="headertabela ">
                                <center><b>Condição</b></center>
                            </td>
                            <td class="headertabela">
                                <center><b>Garantia</b></center>
                            </td>
                            <td class="headertabela ">
                                <center><b>Marca</b></center>
                            </td>
                            <td class="headertabela">
                                <center><b>Preço Compra</b></center>
                            </td>
                            <td class="headertabela">
                                <center><b>Editar</b></center>
                            </td>
                            <td class="headertabela">
                                <center><b>Excluir</b></center>
                            </td>
                        </tr>

                        <tbody class="tabela">
                        <?php
                        while($user_data = mysqli_fetch_array($resultado_entrada_estoque)){
                            echo "<tr class='linha'>";
                                echo "<td class='corpotabela'>".$user_data['id']."</td>";
                                echo "<td class='corpotabela'>".$user_data['produto']."</td>";
                                echo "<td class='corpotabela'>".$user_data['quantidade']."</td>";
                                echo "<td class='corpotabela'>".$user_data['condicao']."</td>";
                                echo "<td class='corpotabela'>".$user_data['garantia']."</td>";
                                echo "<td class='corpotabela'>".$user_data['marca']."</td>";
                                echo "<td class='corpotabela'>".$user_data['preco_de_compra']."</td>";

                                echo "<td class='corpotabela excluir'>
                                <div class='atender'>
                                <a href='editando_estoque.php?id=$user_data[id]'>
                                <img class='img-preta' src='IMG/lapis.png'></a>
                                </div>

                                </td>";

                                echo "<td class='corpotabela excluir'>
                                <div class='atender'>
                                <a href='delete_estoque.php?id=$user_data[id]'>
                                <img class='img-preta' src='IMG/lixo.png'></a>
                                </div>
                                </td>";

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