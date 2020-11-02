<?php include_once("header.php"); ?>

<section id="pagina-contato">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2><b>Contatos</b></h2><hr>
      </div>
    </div>
  </div>

  <div class="contatos">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="contato">
            <img src="./imagens/email.jpg"/>
            <p>contato@fullstackeletro.com</p>
          </div>
        </div>
        <div class="col">
          <div class="contato">
            <img src="./imagens/whatsapp.png"/>
            <p>(11) 99999-9999</p>
          </div>
        </div>
      </div>
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
  <div class="container">
    <div class="row">
      <div class="col">
        <form method="post" action="">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" class="input form-control" />
          </div>

          <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" id="mensagem" class="textarea form-control"> </textarea>
          </div>

          <input type="submit" class="btn submit" value="Enviar" />
        </form>
      </div>
    </div>
  </div>
</section>

<?php include_once("footer.php"); ?>
