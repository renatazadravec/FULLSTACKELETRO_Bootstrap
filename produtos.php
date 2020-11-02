<?php include_once("header.php"); ?>

<section id="pagina-produto">

  <div class="container">
    <div class="row">
      <div class="col">
        <h2><b>Produtos</b></h2><hr>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="categorias">
          <h3>Categorias</h3>
          <ul>
            <li onclick="exibir_categoria('box_produto')">Todos (16)</li>
            <li onclick="exibir_categoria('geladeiras')">Geladeiras (4)</li>
            <li onclick="exibir_categoria('fogoes')">Fogões (3)</li>
            <li onclick="exibir_categoria('microondas')">Microondas (3)</li>
            <li onclick="exibir_categoria('lavaLoucas')">Lava - Louças (3)</li>
            <li onclick="exibir_categoria('lavadoraDeRoupas')">Lavadora de Roupas (3)</li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <?php include_once("listagemdeprodutos.php"); ?>
      </div>
    </div>
  </div>
</section>

<?php include_once("footer.php"); ?>
