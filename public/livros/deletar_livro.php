<?php
include_once "../../generic/autoload.php";
require_once __DIR__ . '/../../dao/LivrosDAO.php';
use dao\LivrosDAO;

$livrosDAO = new LivrosDAO();

if (isset($_GET['id'])) {
    $livroId = $_GET['id'];
    $livro = $livrosDAO->buscarLivroPorId($livroId);
    if (!$livro) {
        echo "Erro, livro não encontrado.";
        header("Location: ver_livros.php");
        exit; // Encerrar o script após redirecionar
    }
    
    $sucesso = $livrosDAO->excluirLivro($livroId);
    if ($sucesso) {
        header("Location: ver_livros.php");
    } else {
        echo "Falha ao excluir o livro.";
    }
} else {
    echo "ID do livro não especificado.";
    header("Location: ver_livros.php");
}
?>