<?php

// Criar a conexão com o banco de dados
$conexao = new PDO('mysql:host=localhost;dbname=my_database', 'root', '');

// Verificar se o formulário foi enviado
if (isset($_POST['acao']) && $_POST['acao'] == 1) {

    // Obter os dados do formulário
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $genero = $_POST['genero'];

    // Atualizar os dados do livro no banco de dados
    $sql = "UPDATE livros SET nome = '$nome', quantidade = $quantidade, genero = '$genero' WHERE id = $id";
    $conexao->query($sql);

    // Atualizar a página de listagem com as informações atualizadas do livro
    header("Location: listar.php");
} else if (isset($_GET['acao']) && $_GET['acao'] == 'obter') {

    // Obter o ID do livro a ser alterado
    $id = $_GET['id'];
    
    // Executar uma consulta para obter os dados do livro
    $sql = "SELECT * FROM livros WHERE id = $id";
    $livro = $conexao->query($sql)->fetch();
    
    // Converter os dados do livro para formato JSON
    $livro = json_encode($livro);
    
    // Retornar os dados em formato JSON
    header('Content-Type: application/json');
    echo $livro;
}
?>