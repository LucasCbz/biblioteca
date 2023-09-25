<?php
namespace services;
require_once __DIR__ . '/../dao/UsuariosDAO.php';
use dao\UsuariosDAO ;

class Usuarios extends UsuariosDAO{
    public function logar($email,$senha){
        $arrsql= $this-> verificarSenha($email,$senha);
        if($arrsql[0]['qtd']==1){
            //regra de sessao;
            echo "logado";

        }else{
            //regra pra voltar para o login;
            echo "usuário ou senha incorreto.";
        }
    }
}
?>