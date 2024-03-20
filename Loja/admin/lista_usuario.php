<html>

<head>
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'menu.php';
    include 'connection.php';
    ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id Usuario</th>
                <th>Nome Usuario</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Excluir</th>
                <th>Editar</th>
                <td><a href="incluir_usuario.php" class="btn btn-primary active" aria-current="page">Button</a></td>
            </tr>

        </thead>
        <tbody>
            <?php
            $sql = "select * from usuarios";
            $busca_usuario = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($busca_usuario)) {
                $id_usuario = $array['id_usuario'];
                $nome_usuario = $array['nome_usuario'];
                $email = $array['email'];
                $senha = $array['senha'];
                ?>
                <tr>
                    <td>
                        <?php echo $id_usuario ?>
                    </td>
                    <td>
                        <?php echo $nome_usuario ?>
                    </td>
                    <td>
                        <?php echo $email ?>
                    </td>
                    <td>
                        <?php echo $senha ?>
                    </td>
                    <td><a href="excluir_usuarioS.php?id_usuario=<?php echo $id_usuario ?>" class="btn btn-info">Excluir</a>
                    <td><a href="editar_usuarioS.php?id_usuario=<?php echo $id_usuario ?>" class="btn btn-info">Edit</a>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>