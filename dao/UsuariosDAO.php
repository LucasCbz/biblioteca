<?php

namespace dao;
require_once __DIR__ . '/../generic/MysqlSing.php';
use generic\MysqlSing;

use PDO;

class UsuariosDAO {

    public function inserirUsuario($nome, $email, $senha) {
        $bd = MysqlSing::getInstance();
    
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        
        $stmt = $bd->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
    
        if ($stmt->execute()) {
            return true; // Inserção bem-sucedida
        } else {
            return false; // Falha na inserção
        }
    }
    
    public function verificarSenha($email, $senha)
    {
        $bd = MysqlSing::getInstance();
        $sql = $bd->prepare("SELECT COUNT(*) AS qtd FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindParam(':email', $email, PDO::PARAM_STR);
        $sql->bindParam(':senha', $senha, PDO::PARAM_STR);
        if ($sql->execute()) {
            return true; // Inserção bem-sucedida
        } else {
            return false; // Falha na inserção
        }
    }
    public function verificarEmailEmUso($email) {
        $bd = MysqlSing::getInstance();
    
        $sql = "SELECT COUNT(*) AS qtd FROM usuarios WHERE email = :email";
        
        $stmt = $bd->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            return $resultado['qtd'] > 0;
        } else {
            return false; // Falha na consulta
        }
    }
    

}
