<?php include_once("conexaobd.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Nossas Lojas</title>
    <link rel="stylesheet" href="css/estilo.css" />
  </head>
  <body>
    
    <?php include_once("header.html"); ?>  

    <section id="nossas-lojas">

      <h2>Lojas</h2>
      <hr />

      <div class="lojas">
        <div class="loja">
          <h3>Rio de Janeiro</h3>
          <p>Avenida Presidente Vargas, 5000</p>
          <p>10 &ordm; andar</p>
          <p>Centro</p>
          <p>(21) 3333-3333</p>
        </div>

        <div class="loja">
          <h3>São Paulo</h3>
          <p>Avenida Vargas, 5000</p>
          <p>10 &ordm; andar</p>
          <p>Centro</p>
          <p>(21) 3333-3333</p>
        </div>

        <div class="loja">
          <h3>Santa Catarina</h3>
          <p>Avenida Presidente, 5000</p>
          <p>10 &ordm; andar</p>
          <p>Centro</p>
          <p>(21) 3333-3333</p>
        </div>
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
