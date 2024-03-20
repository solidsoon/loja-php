<?php
include 'connection.php';
$id_usuario = $_POST['id_usuario'];
$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$senha = $_POST['senha'];
$sql = "UPDATE usuarios SET nome_usuario='$nome_usuario', email_usuario='$email_usuario', `senha`='$senha' WHERE usuarios.id_usuario = $id_usuario";
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
  <h4>Usuário Editado com Sucesso</h4>
</div>
<div>
  <a href="lista_usuario.php">Voltar</a>
</div>