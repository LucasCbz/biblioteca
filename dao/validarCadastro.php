<?php
use generic\ConnectionBD;
use generic\MysqlSing;
session_start();

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$con =new conexao();

$sql="select * from usuarios where nome= '$nome' ";
$res = $con->executar($sql);
$acao = $_GET["acao"];
    if(sizeof($res)>0){
        header("location: cadastro.php");
    }else{
        $sql="insert into usuarios (nome,email,senha) values ('$nome','$email','$senha')";
        $conexao= new conexao();
        $conexao->executar($sql);
        header("location: login.php");

    }
?>