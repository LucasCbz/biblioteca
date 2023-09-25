<?php
include_once "../../generic/autoload.php";
require_once __DIR__ . '/../../services/Livros.php';
require_once __DIR__ . '/../../dao/LivrosDAO.php';
require_once __DIR__ . '/../../public/livros/alterar_livro.php';
use services\Livros;

$id = isset($_POST['livroId']) ? $_POST['livroId'] : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeLivro = $_POST['nomeLivro'];
    $quantidade = $_POST['quantidade'];
    $genero = $_POST['genero'];

    if ($id !== null) {
        $livrosDAO = new Livros();
        $livrosDAO->alterarLivro($id, $nomeLivro, $quantidade, $genero);
        header("location: ../../public/livros/ver_livros.php");
    } else {
        echo "ID do livro não especificado. Não foi possível atualizar o livro.";
    }
}
?>