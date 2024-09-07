<?php

class View
{


    public function MontaHome()
    {
        echo '
        <header> 
<div>
<h1>Bem vindo ao Restaurante!</h1>
<p>Escolha uma opção</p>
</div>

</header>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cardapio</h5>
      </div>
	<a href="#" class='btn btn-primary'>Registrar novo Pedido!</a>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ver historico de pedidos</h5>
      </div>
	<a href="#" class='btn btn-primary'>Veja seu historico de pedidos!</a>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Faça um novo pedido!</h5>
      </div>
	<a href='novoPedido.php' class='btn btn-primary'>Registrar novo Pedido!</a>
    </div>
  </div>
        ';

    }//Função montando o Menu Inicial



}

?>
