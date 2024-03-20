<?php
include 'connection.php';
$id_usuario = $_POST['id_usuario'];

$sql = "DELETE FROM usuarios WHERE usuarios.id_usuario='$id_usuario'";
$a = mysqli_query($conexao,$sql);
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
  <h4>Usuario Excluido</h4>
</div>
<div>
  <a href="lista_usuario.php">Voltar</a>
</div>