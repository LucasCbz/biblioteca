<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="container">
        <div class="cadastro">
            <h1>Bem-vindo ao cadastro</h1>
            <form action="inicio.php" method="POST">
                <input type="email" name="email" id="email" placeholder="Email:" >
                <input type="text" name="nome" id="nome" placeholder="Nome:">
                <input type="password" name="senha" id="senha" placeholder="Senha:">
                <!-- Alteração: Altere o tipo do botão para "submit" e nomeie-o como "cadastrar" -->
                <input type="submit" name="cadastrar" value="Cadastrar-se">
                <a class="opc-cadastro">Já tem uma conta? <a href="login.php">Entrar na sua conta</a></a>
            </form>
        </div><!--cadastro-->
    </div><!--container-->
</body>
</html>
