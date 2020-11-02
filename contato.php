<?php include_once("header.php"); ?>

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

    <?php include_once("footer.php"); ?>
