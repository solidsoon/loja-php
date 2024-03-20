<html>
    <head>
        <title>Listagem de Fornecedores</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <?php
        include 'menu.php';
    include 'connection.php';
        ?>

        <table class="table table-striped">
            <thead> 
        <tr>
        <th class="fornecedor">Fornecedor
        <th>Descrição</th>
        <th>CPF/CNPJ</th>
        <th>CEP</th>
        <th>Logradouro</th>
        <th>Numero</th>
        <th>Complemento</th>
        <th>Email</th>
        <th>Celular</th>
        <td><a href="incluir_fornecedores.php" class="btn btn-primary active" aria-current="page">Button</a></td>
        </tr>
            </thead>
            <tbody> 
                <?php
                $sql = "select * from fornecedores";
                $busca_fornecedor = mysqli_query($conexao, $sql);
                while($array = mysqli_fetch_array($busca_fornecedor)){
                    $id_fornecedor = $array ['id_fornecedor'];
                    $nome_fornecedor = $array ['nome_fornecedor'];
                    $cpf_cnpj = $array ['cpf_cnpj'];
                    $cep = $array['cep'];
                    $logradouro = $array ['logradouro'];
                    $numero = $array['numero'];
                    $complemento = $array ['complemento'];
                    $email = $array['email'];
                    $celular = $array ['celular'];
                ?>
            <tr>
                <td><?php echo $id_fornecedor ?></td>
                <td><?php echo $nome_fornecedor ?></td>
                <td><?php echo $cpf_cnpj ?></td>
                <td><?php echo $cep ?></td>
                <td><?php echo $logradouro ?></td>
                <td><?php echo $numero ?></td>
                <td><?php echo $complemento ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $celular ?></td>
                <td><a href=  "editar_fornecedor.php?id_fornecedor=<?php echo $id_fornecedor?>" class="btn btn-info">Edit</a<
            </tr>
            <?php }
            ?>
            </tbody>
        </table>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
