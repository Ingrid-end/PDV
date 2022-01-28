<div class="table_center">
    <div class="drop-down">
        <!-- NOME  -->
       <div id="dropDown" class="drop-down__button">
        <span class="drop-down__name">Menu</span>
        </div>
         
          <div class="drop-down__menu-box">
            <ul class="drop-down__menu">
            <a href="estoque.php"><li class="drop-down__item">Estoque</li></a>
              <a href="entrada_estoque.php"><li class="drop-down__item"> Cadastrar Produtos</li></a>
              <a href="estoque_cadastro.php"><li class="drop-down__item">Cadastro Clientes </li></a>
              <a href="cadastro_cliente.php"><li class="drop-down__item"> Cadastrar Clientes</li></a>
              <a href="servico_efeituado.php"><li class="drop-down__item">Serviços Efetuados</li></a>
              <a href="index.php"> <li class="drop-down__item">Caixa</li> </a>
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