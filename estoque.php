<!-- CAIXA -->
<!DOCTYPE html>
<?php 
//Cabeçalho do software
include("INCLUDE/head.php"); 
?>
<html lang="pt-br">
    <body>
        <br>
        <a href="entrada_estoque.php" class="a_estoque">Entrada Estoque</a>
            <br>
            <br>
            <a href="index.php" class="a_estoque" style="margin-top: 20%;">CAIXA</a>
  

        <center>
        <h1 class="font_titulos tamanho_titulo">Auto Peças e Mecanica Palmeiras</h1>

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
                                <center><b>Descrição</b></center>
                            </td>
                            <td class="headertabela">
                                <center><b>Preço Compra</b></center>
                            </td>
                            <td class="headertabela">
                                <center><b>Preço Venda</b></center>
                            </td>
                            <td class="headertabela">
                                <center><b>Lucro</b></center>
                            </td>
                            <td class="headertabela">
                                <center><b>Editar</b></center>
                            </td>
                            <td class="headertabela">
                                <center><b>Excluir</b></center>
                            </td>
                        </tr>
                </table>
                <table border="1" class="tabela">
                                      <tr class="linha">
                        <td class="corpotabela">
                            <center>
                                <!-- Codigo --> Cod
                            </center>
                        </td>
                        <td class="corpotabela">
                            <center>
                               <!--Produto -->Produti

                            </center>
                        </td>
                        <td class="corpotabela">
                            <center>
                                <!-- Quantidade --> QTD
                                </center>
                        </td>
                        <td class="corpotabela">
                            <center>
                                <!-- Condição --> Condição
                                </center>
                        </td>
                        <td class="corpotabela">
                            <center>
                                <!-- Garantia -->Garantia
                            </center>
                        </td>
                        <td class="corpotabela">
                            <center>
                                <!-- Marca --> Marca
                            </center>
                        </td>
                        <td class="corpotabela">
                            <center>
                                <!-- Descrição --> Descrição
                            </center>
                        </td>
                        <td class="corpotabela">
                            <center>
                                <!-- Preço Compra --> Preço Compra
                            </center>
                        </td>
                        <td class="corpotabela">
                            <center>
                                <!-- Preço Venda --> Preço Venda
                             </center>
                        </td>
                        <td class="corpotabela">
                            <center>
                                <!--Lucro --> Lucro
                            </center>
                        </td>
                      
                    
                        <td class="corpotabela excluir">
                            <center>
                                <!-- editar equipamento -->
                                <div class="atender">
                                    <a href="#">
                              <img class="img-preta" src="IMG/lapis.png">
                              </a>
                                </div>
                            </center>
                        </td>
                        <td class="corpotabela excluir">
                            <center>
                                <!-- excluir equipamento -->
                                <div class="atender">
                                <a href="#">
                              <img class="img-preta" src="IMG/lixo.png">
                              </a>
                                </div>
                            </center>
                        </td>
                </tr>                 
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
    </body>
</html>