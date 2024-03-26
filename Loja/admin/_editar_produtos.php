<?php
include 'connection.php';
$id_produto = $_POST['id_produto'];
$nome_produto = $_POST['nome_produto'];
$id_categoria = $_POST['id_categoria'];
$ql = "UPDATE categorias SET id_produto = '$id_produto' WHERE categorias.id_produto = $id_produto";
$inserir = mysqli_query($conexao, $ql);
?>

<center>
    <h4>categoria alterada com sucesso</h4>
</center>

<a href="lista_categorias.php">Voltar</a>

<head>
    <style>
        div {
            display: flex;
        }

        </head><body><div><title>Editar categorias</title></div><div><a href="lista_categorias.php">Voltar</a></div></body>