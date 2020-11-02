<?php include_once("conexaobd.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Contatos</title>
    <link rel="stylesheet" href="css/estilo.css" />
  </head>
  <body>

    <?php include_once("header.html"); ?>

    <section id="pagina-contato">
      <h2>Contatos</h2>
      <hr />

      <div class="contatos">
        <div class="contato">
          <img src="./imagens/email.jpg"/>
          <p>contato@fullstackeletro.com</p>
        </div>

        <div class="contato">
          <img src="./imagens/whatsapp.png"/>
          <p>(11) 99999-9999</p>
        </div>
      </div>
     <?php
      if(isset($_POST['nome']) && isset($_POST['mensagem'])){
        $nome = $_POST['nome'];
        $mensagem = $_POST['mensagem'];

        $sql = "insert into contato (nome, mensagem) values ('$nome', '$mensagem')";
        $result = $conn->query($sql);
      }
     ?>
      <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" class="input" />

        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" id="mensagem" class="textarea"> </textarea>

        <input type="submit" class="submit" value="Enviar" />
      </form>
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
