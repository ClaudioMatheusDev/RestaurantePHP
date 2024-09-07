<?php

class View
{


    public function PaginaPedidos()
    {
        echo '
        <header> 
<div>
<h1>Faça Seu Pedido!</h1>
<p>Prencha os dados abaixo:</p>
</div>

</header>

<div class="row g-3">
  <div class="col">
    <input type="text" class="form-control" placeholder="Primeiro nome" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Último nome" aria-label="Last name">
  </div>
</div>

<section id="order">
  <form id="order-form">
     <div class="menu-cards">
    <div class="card">
      <img src="path/to/image.jpg" alt="Prato Exemplo">
      <div class="card-content">
        <h3>Nome do Prato</h3>
        <p>Descrição detalhada do prato.</p>
        <span class="price">R$ 29,90</span>
        <input type="number" name="quantity" min="1" value="1">
        <button type="button" onclick="addToCart()">Adicionar ao Carrinho</button>
      </div>
    </div>

<div class="card">
      <img src="path/to/image.jpg" alt="Prato Exemplo">
      <div class="card-content">
        <h3>Nome do Prato</h3>
        <p>Descrição detalhada do prato.</p>
        <span class="price">R$ 29,90</span>
        <input type="number" name="quantity" min="1" value="1">
        <button type="button" onclick="addToCart()">Adicionar ao Carrinho</button>
      </div>
    </div>
</div>

     <div class="menu-cards">
    <div class="card">
      <img src="path/to/image.jpg" alt="Prato Exemplo">
      <div class="card-content">
        <h3>Nome do Prato</h3>
        <p>Descrição detalhada do prato.</p>
        <span class="price">R$ 29,90</span>
        <input type="number" name="quantity" min="1" value="1">
        <button type="button" onclick="addToCart()">Adicionar ao Carrinho</button>
      </div>
    </div>

<div class="card">
      <img src="path/to/image.jpg" alt="Prato Exemplo">
      <div class="card-content">
        <h3>Nome do Prato</h3>
        <p>Descrição detalhada do prato.</p>
        <span class="price">R$ 29,90</span>
        <input type="number" name="quantity" min="1" value="1">
        <button type="button" onclick="addToCart()">Adicionar ao Carrinho</button>
      </div>
    </div>
</div>


  </form>
</section>';

}//Função montando a pagina de registrar novo pedido



}

?>
