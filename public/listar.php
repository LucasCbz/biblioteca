<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" type="text/css">
  <title>Document</title>
</head>
<body>
<h1>Lista de Livros</h1>

<hr/>
<div class="tabela">
<table>
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>QUANTIDADE</th>

        <th>GENERO</th>
        <th>EXCLUIR</th>
    </tr>
  <?php
  // Defina a variável $conexao
  try {
    $conexao = new PDO('mysql:host=localhost;dbname=my_database', 'root', '');

    // Execute a consulta e obtenha os resultados
    $arrLivros = $conexao->query("select * from livros");

    // Percorra os resultados e exiba-os na tabela
    foreach ($arrLivros as $livro) {
      ?>

      <tr>
          <td><?=$livro['id']?></td>
          <td><?php echo $livro['nome']; ?></td>
          <td><?=$livro['quantidade']?></td>
          <td><?=$livro['genero']?></td>
          <td>
            <a href="#" onclick="editarLivro(<?=$livro['id']?>);">Editar</a>
        </td>
          <td>
            <a href="#" onclick="excluirLivro(<?=$livro['id']?>);">Excluir</a>
        </td>
      </tr>

      
      <?php
    }
  } catch (PDOException $e) {
    // Exiba um erro se houver um erro de conexão
    echo $e->getMessage();
  }
  ?>
</table>
</div><!--tabela-->

<?php
if (isset($_GET['acao'])) {
    ?>
    <div class="alert alert-success">
        <?php
        if ($_GET['acao'] == 1) {
            echo "Salvo com sucesso!";
        }
        ?>

    </div>

    <?php
}
?>

<script>
function excluirLivro(id) {
    if (confirm("Tem certeza de que deseja excluir este livro?")) {
        // Fazer uma solicitação Ajax para excluir o livro
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Atualizar a tabela após a exclusão
                window.location.reload();
            }
        };
        xhr.open("GET", "acoes.php?acao=deletar&id=" + id, true);
        xhr.send();
    }
}

function editarLivro(id) {
    // Adicionar o ID do livro ao formulário de edição
    document.querySelector("#formulario-edicao").querySelector("input[name='id']").value = id;

    // Redirecionar para a página de edição com o ID do livro
    window.location.href = `editar.php?id=${id}`;
}
</script>

</body>
</html>