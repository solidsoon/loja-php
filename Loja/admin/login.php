<?php
session_start();
include 'connection.php';
    $email = $_POST['email_usuario'];
    $password = $_POST['password'];
    $id_usuario = 0;
    $sql = "select * from usuarios where email='$email'
    and senha='$password'";
    $busca_usuario = mysqli_query($conexao,$sql);
        while ($array = mysqli_fetch_array($busca_usuario)) {
            $id_usuario = $array['id_usuario'];
            $nome_usuario = $array['nome_usuario'];
            $email = $array['email'];
            $password = $array['senha'];
        }  
        if ($id_usuario == 0) {
            unset($_SESSION['id_usuario']);
            unset($_SESSION['nome_usuario']);
            header('location:usuario_rejeitado.php');
        }
        else {
            $_SESSION['id_usuario'] = $id_usuario;
            $_SESSION['nome_usuario'] = $nome_usuario;
            header('location:principal.php');
          }    
?>