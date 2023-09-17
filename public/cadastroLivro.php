<?php
include_once "/biblioteca/generic/Autoload.php";
?>
<html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <div class="container">
      <div class="cadastro">
        <h1>Bem-vindo ao cadastro de livros</h1>
        <form method="post" action="/biblioteca/dao/validarCadastroLivro.php">
          <input type="text" name="nomeLivro" id="nomeLivro" placeholder="Nome:">
          <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade:">
          <input type="text" name="genero" id="genero" placeholder="Gênero:">
          <input type="submit" value="Cadastrar">
        </form>
      </div><!--inicio-->
    </div><!--container-->      
  </body>
</html>