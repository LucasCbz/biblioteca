<?php
include_once "/generic/autoload.php";
require_once __DIR__ . '/../CadastroUsuario.php';
use services\CadastroUsuario;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $cadastroServ = new CadastroUsuario();
    $cadastroServ->cadastrar($nome, $email, $senha);

    header("location: ../../public/login/login.php"); 
}
?>
