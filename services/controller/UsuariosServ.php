<?
include_once $_SERVER['DOCUMENT_ROOT']."/biblioteca1/generic/Autoload.php";

use services\Usuarios;

$acao=isset($_POST['acao'])?$_POST['acao']:null;

switch ($acao) {
    case 1:
        $userServ= new Usuarios();
        $email= $_POST["email"];
        $senha= $_POST["senha"];
      
        $userServ->logar($email,$senha);
        header("location: inicio.php");
        break;
    
    default:
        header("location: login.php");
        echo "ação incorreta!";    
        echo "Usuário e/ou senha inválido(s)!";
        break;
}