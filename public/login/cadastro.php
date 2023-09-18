<?php
include_once "/biblioteca1/generic/Autoload.php";
?>
<html>
  <head>
    <link rel="stylesheet" href="../style.css" type="text/css">
  </head>
  <body>
    <div class="container">
      <div class="cadastro">
        <h1>Bem-vindo ao cadastro</h1>
        <form method="post" action="/biblioteca1/dao/cadastro.php">
          <input type="email" name="email" id="email" placeholder="Email:">
          <input type="text" name="nome" id="nome" placeholder="Nome:">
          <input type="password" name="senha" id="senha" placeholder="Senha:">
          <input type="submit" value="Cadastrar-se">
          <a class="opc-cadastro">Já tem uma conta? <a href="login.php">Entrar na sua conta</a></a>
        </form>
      </div><!--inicio-->
    </div><!--container-->      
  </body>
</html>