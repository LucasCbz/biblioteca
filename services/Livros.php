<?php
namespace services;
require_once __DIR__ . '/../dao/LivrosDAO.php';
use dao\LivrosDAO;

class Livros extends LivrosDAO {
  public function cadastrarLivro($nomeLivro, $quantidade, $genero) {
        $this->inserirLivro($nomeLivro, $quantidade, $genero);
        echo "Cadastro do livro realizado com sucesso!";
}
  public function AtualizarLivro($id, $nomeLivro, $quantidade, $genero){
        $this->alterarLivro($id, $nomeLivro, $quantidade, $genero);
        echo "Livro alterado realizado com sucesso!";    
  }
  public function DeletarLivro($id){
        $this->excluirLivro($id);
        echo "Livro Deletado com sucesso";
  }
}
?>
