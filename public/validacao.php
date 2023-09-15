<?php
include_once "conexao.php";
session_start();


$email = $_POST['email'];
$senha = $_POST['senha'];
$conexao =new conexao();

$sql="select * from usuarios where email= '$email' and senha ='$senha' ";
$res = $conexao->executar($sql);

if(sizeof($res)>0){
    $_SESSION['id']=$res[0]["id"];
    $_SESSION['nome'] = $res[0]['nome'];
    header("location: listar.php");
   
}else{
    echo "Usuário não existe!";
}


?>