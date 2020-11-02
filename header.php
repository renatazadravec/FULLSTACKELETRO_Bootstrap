<?php include_once("conexaobd.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Full Stack Eletro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css" />
  </head>
  <body>
    
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container">
                <div class="logo">
                    <a class="navbar-brand" href="index.php">
                        <img src="./imagens/logo.png" alt="logo">
                    </a>
                </div>
                
                <div class="menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="produtos.php">Nossos Produtos</a></li>
                        <li class="nav-item"><a class="nav-link" href="loja.php">Nossas Lojas</a></li>
                        <li class="nav-item"><a class="nav-link" href="contato.php">Contatos</a></li>
                        <li class="nav-item"><a class="nav-link" href="pedido.php">Pedidos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>