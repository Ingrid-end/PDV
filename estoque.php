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
                                echo "<td class='corpotabela'>".$user_data['preco_de_venda']."</td>";
                                echo "<td class='corpotabela'>".$user_data['lucro']."</td>";

                                echo "<td class='corpotabela excluir'>
                               
                                <a href='editando_estoque.php?id=$user_data[id]'>
                                <img class='img-preta' src='IMG/lapis.png'></a>
                         
                                </td>";

                                echo "<td class='corpotabela excluir'>
                                <div class='atender'>
                                <a href=''></a>
                                <img class='img-preta' src='IMG/lixo.png'>
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
    </body>
</html>