<?php
namespace dao;

require_once __DIR__ . '/../generic/MysqlSing.php';
require_once __DIR__ . '/../model/Livros.php';
use generic\MysqlSing;
use model\Livros;
use PDO;

class LivrosDAO
{
    public function inserirLivro($nomeLivro, $quantidade, $genero)
{
    $bd = MysqlSing::getInstance();

    $stmt = $bd->prepare("INSERT INTO livros1 (nome, quantidade, genero) VALUES (:nome, :quantidade, :genero)");
    $stmt->bindParam(':nome', $nomeLivro, PDO::PARAM_STR);
    $stmt->bindParam(':quantidade', $quantidade, PDO::PARAM_INT);
    $stmt->bindParam(':genero', $genero, PDO::PARAM_STR);

    if ($stmt->execute()) {
        return true; // Inserção bem-sucedida
    } else {
        return false; // Falha na inserção
    }
}

public function buscarLivroPorId($id)
{
    $bd = MysqlSing::getInstance();

    $stmt = $bd->prepare("SELECT * FROM livros1 WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } else {
        return null;
    }
}

public function excluirLivro($livroId)
{
    $bd = MysqlSing::getInstance();

    $sql = "DELETE FROM livros1 WHERE id = :id";
    $parametros = [':id' => $livroId];

    $stmt = $bd->prepare($sql);

    if ($stmt->execute($parametros)) {
        return true; // Exclusão bem-sucedida
    } else {
        return false; // Falha na exclusão
    }
}


public function alterarLivro($id, $nomeLivro, $quantidade, $genero)
{
    $bd = MysqlSing::getInstance();

    $stmt = $bd->prepare("UPDATE livros1 SET nome = :nome, quantidade = :quantidade, genero = :genero WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':nome', $nomeLivro, PDO::PARAM_STR);
    $stmt->bindParam(':quantidade', $quantidade, PDO::PARAM_INT);
    $stmt->bindParam(':genero', $genero, PDO::PARAM_STR);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}


public function listarLivros()
{
    $bd = MysqlSing::getInstance();

    $result = $bd->query("SELECT * FROM livros1");

    return $result;
}

}
?>