<?php

namespace dao;

use model\Usuarios;

class UsuariosDAO extends ConnectionBD
{

    // public function inserirUsuario($usuario){}    

    // public function buscarUsuarioPorEmail($email){}

    protected function cadastrarUsuario($nome, $email, $senha){

        session_start();

        $sql="select * from usuarios where nome= '$nome' ";
        $res = $this->bd->($sql);

        if(sizeof($res)>0){
            header("location: cadastro.php?&erro=1");
        }else{
            $sql="insert into usuarios (nome,email,senha) values ('$nome','$email','$senha')";            
            $this->bd->($sql);
            header("location: login.php");
    
        }
    }

    protected function listarTodos(){

        $sql = "select id, nome, email, senha from usuarios";

        return  $this->bd->query($sql);
    }

    protected function verificarSenha($ra, $senha){

        $sql = "select count(1) as qtd from usuarios where email=:email and senha=:senha";
        $param = [
            ":email" => $email,
            ":senha" => $senha
        ];

        return  $this->bd->query($sql, $param);
    }
}
