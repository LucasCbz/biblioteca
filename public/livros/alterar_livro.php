<?php
include_once "../../generic/autoload.php";
require_once __DIR__ . '/../../dao/LivrosDAO.php';
use dao\LivrosDAO;

if (isset($_GET['id'])) {
  $livroId = $_GET['id'];
  $livrosDAO = new LivrosDAO();
  $livro = $livrosDAO->buscarLivroPorId($livroId);
  if (!$livro) {
      // Redirecionar para uma página de erro ou lidar com o livro não encontrado de outra forma
  }
} else {
  // Redirecionar para uma página de erro ou lidar com a falta de ID de outra forma
}
?>

<html>
  <head>
    <link rel="stylesheet" href="../style.css" type="text/css">
  </head>
  <body>
    <div class="container1">
        <h1>Alterar Livro</h1>
        <form method="post" action="../../services/controller/AlteraLivroServ.php">
          <input type="hidden" name="livroId" value="<?php echo $livroId; ?>">
          <input type="text" name="nomeLivro" value="<?php echo $livro['nome']; ?>">
          <input type="number" name="quantidade" value="<?php echo $livro['quantidade']; ?>">
          <input type="text" name="genero" value="<?php echo $livro['genero']; ?>">
          <input type="submit" value="Salvar Alterações">
        </form>

    </div>   
  </body>
</html>
