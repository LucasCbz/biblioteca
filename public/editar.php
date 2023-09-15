<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Livro</title>
</head>
<body>
  <h1>Editar Livro</h1>
  <form action="acoes.php" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" id="livro-id">
    <label for="livro-nome">Nome:</label>
    <input type="text" name="nome" id="livro-nome">
    <label for="livro-quantidade">Quantidade:</label>
    <input type="number" name="quantidade" id="livro-quantidade">
    <label for="livro-genero">Gênero:</label>
    <input type="text" name="genero" id="livro-genero">
    <br><br>
    <input type="submit" value="Salvar">
  </form>

  <script>
    // Recuperar o ID do livro da URL
    const urlParams = new URLSearchParams(window.location.search);
    const livroId = urlParams.get('id');

    // Preencher o campo ID com o valor do livroId
    document.getElementById("livro-id").value = livroId;
  </script>
</body>
</html>