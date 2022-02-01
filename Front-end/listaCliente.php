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
    <?php
    
    ?>
        <center>
        <h1 class="font_titulos tamanho_titulo">Auto Peças e Mecanica Palmeiras</h1>

        <br>
        <br>

        <h2 class="font_titulos">Cliente</h2>    

        <div class="form-pesquisa">
                    
            <input class="pesquisa" type="search" placeholder="Buscar nesta lista" id="pesquisa_cadastro" />
           <!-- Chamar a função searchData usando onclick -->
            <button onclick="searchDataCadastro()" class="botao_pesquisa atender">
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
                                <center><b>Telefone</b></center>
                            </td>
                             <td class="headertabela ">
                                <center><b>Carro</b></center>
                            </td>
                            <td class="headertabela">
                                <center><b>Modelo</b></center>
                            </td>
                            <td class="headertabela ">
                                <center><b>ano</b></center>
                            </td>
                            <td class="headertabela ">
                                <center><b>Editar</b></center>
                            </td>
                            <td class="headertabela ">
                                <center><b>Excluir</b></center>
                            </td>
                        </tr>

                        <tbody class="tabela">
                        <?php
                        while($cliente_data = mysqli_fetch_array($resultado_cadastro)){
                            echo "<tr class='linha'>";
                                echo "<td class='corpotabela'>".$cliente_data['id']."</td>";
                                echo "<td class='corpotabela'>".$cliente_data['cliente']."</td>";
                                echo "<td class='corpotabela'>".$cliente_data['telefone']."</td>";
                                echo "<td class='corpotabela'>".$cliente_data['carro']."</td>";
                                echo "<td class='corpotabela'>".$cliente_data['modelo']."</td>";
                                echo "<td class='corpotabela'>".$cliente_data['ano']."</td>";
                

                                echo "<td class='corpotabela excluir'>
                                <div class='atender'>
                                <a href='editando_cadastro.php?id=$cliente_data[id]'>
                                <img class='img-preta' src='IMG/lapis.png'></a>
                                </div>

                                </td>";

                                echo "<td class='corpotabela excluir'>
                                <div class='atender'>
                                <a href='delete_cadastro.php?id=$cliente_data[id]'>
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
    var search_cadastro = document.getElementById('pesquisa_cadastro');

    // Esta "ouvindo" a tecla q o usuario clicar
    search_cadastro.addEventListener("keydown", function(event) {
        // Se essa tecla for enter dai sim ele vai chamar a função
        if (event.key === "Enter") 
        {
            searchDataCadastro();
        }
    });
        //Função  
    function searchDataCadastro()
    {
        //Alterar a URL
        window.location = 'estoque_cadastro.php?search_cadastro='+search_cadastro.value;
    }
</script>
</html>