<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="cadastro">
            <h1>Cadastrar Livro</h1>
            <form action="acoes.php" method="POST">
            <input type="hidden" name="acao" value="1"> 
                <label>Nome:</label>
                <input type="text" name="nome" >
                <hr>
                <label>Quantidade:</label>
                <input type="number" name="quantidade" />

                <hr>
                <label>Genero:</label>
                <input type="text" name="genero" />
                <br>
                <br>
                <input type="submit" value="Cadastrar">
            </form>
        </div><!--cadastro-->
    </div><!--container-->
</body>
</html>