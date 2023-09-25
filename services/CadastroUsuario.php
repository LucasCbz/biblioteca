<?php
namespace services;
require_once __DIR__ . '/../dao/UsuariosDAO.php';
use dao\UsuariosDAO;

class CadastroUsuario extends UsuariosDAO {
  public function cadastrar($nome, $email, $senha) {
    $emailEmUso = $this->verificarEmailEmUso($email);

    if (!$emailEmUso) {
        $this->inserirUsuario($nome, $email, $senha);
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "O email já está em uso. Por favor, escolha outro email.";
    }
}

}
?>
