<?php
include_once "conexaoBD.php";
$acao = $_GET["acao"];
session_start();
$id_usuario=$_SESSION['id'];

if($acao==2){
  //colocar o cadastro usuario aqui
}
elseif ($acao == 3) {
  // colocar o cadastro livro aqui
}
elseif($acao==4){
  //colocar a alteração livro aqui
}
elseif($acao==5){
  //colocar o excluir livro aqui  
}
elseif($acao==6){
  //colocar o select para ver livros aqui
}  
else{
      echo "Deu errado";
  }
    

