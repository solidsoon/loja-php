<?php
include 'connection.php';
$nome_cliente = $_POST['nome_cliente'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$uf = $_POST['uf'];
$password = $_POST['password'];

$sql = "INSERT INTO clientes (cpf_cnpj, cep, logradouro, numero, complemento, uf ,email, celular, `password`) VALUES ('$cpf_cnpj','$cep','$logradouro','$numero','$complemento','$uf','$email','$celular', '$password')";
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
    <h4>VOCE FOI REGISTRADO</h4>
</div>
<div>
    <a href="acesso.php">Voltar</a>
</div>