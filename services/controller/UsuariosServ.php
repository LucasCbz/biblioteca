<?php
include_once "/generic/autoload.php";
require_once __DIR__ . '/../Usuarios.php';
use services\Usuarios;

$acao=isset($_POST['acao'])?$_POST['acao']:null;

    switch ($acao) {
        case 1:
            $email= $_POST["email"];
            $senha= $_POST["senha"];
            echo "Ação de login detectada. Email: $email, Senha: $senha"; // Mensagem de depuração
            $userServ= new Usuarios();
            $userServ->logar($email,$senha);
            header("location: ../../public/livros/inicio.php");
            break;
        default:
            header("location: ../../public/login/login.php");
            echo "Ação incorreta!";    
            echo "Usuário e/ou senha inválido(s)!";
            break;
    }
?>