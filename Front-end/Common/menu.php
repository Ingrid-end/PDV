<div class="table_center">
    <div class="drop-down">
        <!-- NOME  -->
       <div id="dropDown" class="drop-down__button">
        <span class="drop-down__name">Menu</span>
        </div>
         
          <div class="drop-down__menu-box">
            <ul class="drop-down__menu">
            <a href="../Front-end/caixa.php"> <li class="drop-down__item">Caixa</li> </a>
              <a href="../Front-end/listaEstoque.php"><li class="drop-down__item">Estoque</li></a>
              <a href="../Front-end/createCadastroEstoque.php"><li class="drop-down__item"> Cadastrar Produtos</li></a>
              <a href="../Front-end/listaCliente.php"><li class="drop-down__item">Cadastro Clientes </li></a>
              <a href="../Front-end/createCadastroCliente.php"><li class="drop-down__item"> Cadastrar Clientes</li></a>
              <a href="../Front-end/listaCaixa.php"><li class="drop-down__item">Serviços Efetuados</li></a>
              <a href="../Front-end/listaServicos.php"> <li class="drop-down__item">Mão de Obra</li> </a>

            </ul>
          </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script>
    $(document).ready(function(){
  $('#dropDown').click(function(){
    $('.drop-down').toggleClass('drop-down--active');
  });
});
</script>