<?php include_once("conexaobd.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Produtos</title>
    <link rel="stylesheet" href="css/estilo.css" />
  </head>
  <body>
    
    <?php include_once("header.html"); ?>

    <section id="pagina-produto">

      <h2>Produtos</h2>
      <hr />

      
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
      
      <div class="produtos">

      <?php
        $sql = "select * from produtos";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
          while($rows = $result->fetch_assoc()){
      ?>

        <div class="box_produto <?php echo $rows["categoria"]; ?>">
          <img src="./imagens/<?php echo $rows["imagem"]; ?>"  />
          <h1><?php echo $rows["nome"]; ?></h1>          
          <span class="original">R$ <?php echo $rows["preco"]; ?></span>
          <span class="promocao">R$ <?php echo $rows["preco_promocao"]; ?></span>
        </div>

      <?php
          }
        } else {
          echo "Nenhum produto cadastrado!";
        }
      ?>
        
      </div>
    </section>

    <div class="clear-both"></div>

    <footer>
      <div>
        <h4 class="forma-de-pagamento">Formas de Pagamento</h4>
        <img
          src="./imagens/formas de pagamento.png"
          alt="Formas de Pagamento"
        />
      </div>
      <div class="barra-footer">&copy; Recode Pro</div>
    </footer>
  </body>
  <script src="js/funcoes.js"></script>
</html>
