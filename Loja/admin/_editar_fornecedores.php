<!-- _editar_fornecedores.php -->
<html>

<head>
    <title>Editar Fornecedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'connection.php';
    $id_fornecedor = $_POST['id_fornecedor'];
    $nome_fornecedor = $_POST['nome_fornecedor'];
    $cpf_cnpj = $_POST['cpf_cnpj'];
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $uf = $_POST['uf'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $sql = "update fornecedores set nome_fornecedor='$nome_fornecedor',
    cpf_cnpj='$cpf_cnpj',cep='$cep',logradouro='$logradouro',numero='$numero',
    complemento='$complemento',uf='$uf',  email='$email',celular='$celular' where id_fornecedor='$id_fornecedor'";

    //echo($sql);
    $editar = mysqli_query($conexao, $sql);
    ?>
    <center>
        <h4> Fornecedor Alterado com Sucesso!</h4>
        <a href="lista_fornecedores.php" class="btn btn-primary">Voltar</a>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>