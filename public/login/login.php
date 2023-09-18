<?php
  include_once "/biblioteca1/generic/Autoload.php";
?>

<html>
  <head>
    <link rel="stylesheet" href="../style.css" type="text/css">
  </head>
  <body>
    <div class="container">
      <div class="login">
        <h1>Bem-vindo ao Login</h1>
        <form method="post" action="/biblioteca1/services/controller/UsuariosServ.php">
          <input type="text" name="nome" id="nome" placeholder="Nome:">
          <input type="password" name="senha" id="senha" placeholder="Senha:">
          <input type="email" name="email" id="email" placeholder="Email: ">
          <input type="hidden" name="acao" value="1"/>
          <input type="submit" value="Entrar">
          <a class="opc-cadastro">Não tem uma conta? <a href="./cadastro.php">Cadastrar-se</a></a>
        </form>
      </div><!--inicio-->
    </div><!--container-->      
  </body>
</html>