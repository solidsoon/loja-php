<?php
include 'connection.php';
$id_fornecedor = $_POST['id_fornecedor'];
$nome_fornecedor = $_POST['nome_fornecedor'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$uf = $_POST['uf'];

$sql = "INSERT INTO fornecedores (id_fornecedor,nome_fornecedor, cpf_cnpj, cep, logradouro, numero, complemento, uf ,email, celular) VALUES ('$id_fornecedor','$nome_fornecedor','$cpf_cnpj','$cep','$logradouro','$numero','$complemento','$uf','$email','$celular')";
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
  <h4>Categoria Editada com Sucesso</h4>
</div>
<div>
  <a href="lista_fornecedores.php">Voltar</a>
</div>
