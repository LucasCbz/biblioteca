<?php
include_once "/generic/autoload.php";
require_once __DIR__ . '/../../services/Livros.php';

use services\Livros;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nomeLivro = $_POST["nomeLivro"];
    $quantidade = $_POST["quantidade"];
    $genero = $_POST["genero"];

    $livro = new Livros();
    $livro->cadastrarLivro($nomeLivro, $quantidade, $genero);

    header("Location: ../../public/livros/inicio.php");
    exit();
}
?>
