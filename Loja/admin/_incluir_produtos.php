<?php
include 'connection.php';
$desc_produto = $_POST['desc_produto'];
$id_categoria = $_POST['id_categoria'];
$id_fornecedor = $_POST['id_fornecedor'];
$preco = $_POST['preco'];
$imagem = $_POST['imagem'];


$sql = "INSERT INTO produtos (desc_produto, id_categoria, id_fornecedor, preco, imagem) VALUES ('$desc_produto','$id_categoria','$id_fornecedor', '$preco', '$imagem')";
$inserir = mysqli_query($conexao, $sql);
?>
 
<head>
  <style>
    div {
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>
<div>
  <h4>PRODUTO ADICIONADO</h4>
</div>
<div>
  <a href="lista_fornecedores.php">Voltar</a>
</div>