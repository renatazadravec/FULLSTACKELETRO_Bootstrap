<?php include_once("header.php"); ?>

<section id="pagina-pedido">
  <h2>Pedido</h2>
  <hr />
  <br>
  <?php
  if(isset($_POST['nome_cliente'])){
    $nome_cliente = $_POST['nome_cliente'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $nome_do_produto = $_POST['nome_do_produto'];
    $valor_unitario = $_POST['valor_unitario'];
    $quantidade = $_POST['quantidade'];
    $valor_total = $_POST['valor_total'];

    $sql = "insert into pedidos (nome_cliente, endereco, telefone, nome_do_produto, valor_unitario, quantidade, valor_total) values ('$nome_cliente', '$endereco', '$telefone', '$nome_do_produto', '$valor_unitario', '$quantidade', '$valor_total')";
    $result = $conn->query($sql);
  }
  ?>
  <form method="post" action="">
    <label for="nome_cliente">Nome:</label>
    <input type="text" id="nome_cliente" name="nome_cliente" class="input" required />

    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" class="input" required />

    <label for="telefone">Telefone:</label>
    <input type="number" id="telefone" name="telefone" class="input" required />

    <label for="nome_do_produto">Produto:</label>
    <input type="text" id="nome_do_produto" name="nome_do_produto" class="input" required />

    <label for="valor_unitario">Valor Unitário:</label>
    <input type="text" id="valor_unitario" name="valor_unitario" class="input" required />

    <label for="quantidade">Quantidade:</label>
    <input type="number" id="quantidade" name="quantidade" class="input" required />

    <label for="valor_total">Valor Total:</label>
    <input type="text" id="valor_total" name="valor_total" class="input" required />

    <input type="submit" class="submit" value="Enviar" />
  </form>
</section>

<?php include_once("footer.php"); ?>
