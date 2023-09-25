<?php
include_once "../../generic/autoload.php";
require_once __DIR__ . '/../../dao/LivrosDAO.php';
use dao\LivrosDAO;

$livrosDAO = new LivrosDAO();
$livros = $livrosDAO->listarLivros();
?>

<html>
  <head>
    <link rel="stylesheet" href="../style.css" type="text/css">
  </head>
  <body> 
    <div class="container1">
    <div class="cadastro-livro">
      <a href="./cadastro.php">Cadastrar livro</a>
      <a href="./ver_livros.php">Deletar livro</a>
      <a href="./ver_livros.php">Alterar livro</a>
      <a href="./ver_livros.php">Ver livros</a>
    </div><!--cadastro-livro-->
        <h1 class="texto-livro">Lista de Livros</h1>
        <table>
            <tr class="topico-livro">
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Gênero</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php foreach ($livros as $livro) : ?>
                <tr class="livros-cadastrados">
                    <td><?php echo $livro['nome']; ?></td>
                    <td><?php echo $livro['quantidade']; ?></td>
                    <td><?php echo $livro['genero']; ?></td>
                    <td><a href="alterar_livro.php?id=<?php echo $livro['id']; ?>">Alterar</a></td>
                    <td><a href="deletar_livro.php?id=<?php echo $livro['id']; ?>">Deletar</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>   
  </body>
</html>
