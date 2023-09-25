<?php
include_once "../../generic/autoload.php";
require_once __DIR__ . '/../../services/Livros.php';
require_once __DIR__ . '/../../dao/LivrosDAO.php';
require_once __DIR__ . '/../../public/livros/deletar_livro.php';
use services\Livros;
use dao\LivrosDAO;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['livroId'])) {
  $livroId = $_POST['livroId'];
  $livrosDAO = new LivrosDAO();
  $sucesso = $livrosDAO->excluirLivro($livroId);

  if ($sucesso) {
      header("location: ver_livros.php");
  } else {
      echo "Falha ao excluir o livro.";
  }
}
?>
