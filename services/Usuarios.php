<?
namespace services;

use dao\UsuariosDAO as UsuariosDAO ;

class Alunos extends UsuariosDAO{
   public  function listaTodos(){
        return parent::listarTodos();
    }

    public function logar($email,$senha){
        $arrsql=parent::verificarSenha($email,$senha);
        if($arrsql[0]['qtd']==1){
            //regra de sessao;
            echo "logado";

        }else{
            //regra pra voltar para o login;
            echo "usuário ou senha incorreto.";
        }
    }
}