<?php

include 'connection.php';

$desc_categoria = $_POST['desc_categoria'];
$ql = "INSERT INTO categorias (desc_categoria) VALUES ('$desc_categoria')";

$inserir = mysqli_query($conexao,$ql);
?>
<center>
    <h4>CATEGORIA ADICIONADA</h4>
</center>

 <center>
    <a href="lista_categoria.php">CLICK HERE!!</a>
</center>

