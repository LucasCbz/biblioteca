<?php

namespace dao;

use model\Livros;
use PDO;

class LivrosDAO
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function inserirLivro(Livros $livro)
    {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO livros (nome) VALUES (?)");
            $stmt->bindValue(1, $livro->getNome());
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            // Tratar erros de inserção aqui
            return false;
        }
    }

    public function listarLivros()
    {
        try {
            $stmt = $this->pdo->query("SELECT * FROM livros");
            $livros = [];
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $livro = new Livros();
                $livro->setId($row['id']);
                $livro->setNome($row['nome']);
                $livros[] = $livro;
            }
            return $livros;
        } catch (PDOException $e) {
            // Tratar erros de consulta aqui
            return [];
        }
    }

    // Você pode adicionar métodos para atualizar e excluir livros conforme necessário.
}
