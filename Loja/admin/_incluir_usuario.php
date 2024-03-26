<?php
include 'connection.php';
$nome_usuario = $_POST['nome_usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "INSERT INTO usuarios (nome_usuario, email, senha) VALUES ('$nome_usuario','$email','$senha')";
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
  <h4>CADASTRO CRIADO</h4>
</div>
<div>
  <a href="lista_fornecedores.php">Voltar</a>
</div>