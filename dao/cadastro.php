<?php
use generic\ConnectionBD;
use generic\MysqlSing;
session_start();

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
// $conexao= new ConnectionBD();

$sql="select * from usuarios where nome= '$nome' ";
$res = $bd->query($sql);
$acao = $_GET["acao"];
    if(sizeof($res)>0){
        header("location: cadastro.php?&erro=1");
    }else{
        $sql="insert into usuarios (nome,email,senha) values ('$nome','$email','$senha')";
        // $conexao= new ConnectionBD();
        $bd->query($sql);
        header("location: login.php");

    }
?>