<?php

$conexao = new conexao();

if (isset($_POST['acao']) && $_POST['acao'] == 1) {

    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $genero = $_POST['genero'];

    $sql = "UPDATE livros SET nome = '$nome', quantidade = $quantidade, genero = '$genero' WHERE id = $id";
    $conexao->executar($sql);

    header("Location: listar.php");
} else if (isset($_GET['acao']) && $_GET['acao'] == 'obter') {

    $id = $_GET['id'];
    
    // Executar uma consulta para obter os dados do livro
    $sql = "SELECT * FROM livros WHERE id = $id";
    $livro = $conexao->$bd($sql)->fetch();
    
    // Converter os dados do livro para formato JSON
    $livro = json_encode($livro);
    
    // Retornar os dados em formato JSON
    header('Content-Type: application/json');
    echo $livro;
}
?>