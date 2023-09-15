<?php
include_once "../generic/Autoload.php";
?>
<html>
  <head>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
    <div class="container">
      <div class="login">
        <h1>Bem-vindo ao Login</h1>
        <form method="post" action="validarLogin.php">
          <input type="text" name="nome" id="nome" placeholder="Nome:">
          <input type="password" name="senha" id="senha" placeholder="Senha:">
          <input type="email" name="email" id="email" placeholder="Email: ">
          <input type="button" value="Entrar">
          <a class="opc-cadastro">Não tem uma conta? <a href="cadastro.php">Cadastrar-se</a></a>
        </form>
      </div><!--inicio-->
    </div><!--container-->      
  </body>
</html>