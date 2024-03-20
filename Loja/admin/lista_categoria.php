<html>
    <head>
        <title>Listagem de Categoria</title>
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
        <th class="categoria"></th>
        <th>Description</th>
        <td><class = href="editar_botão.php" class="btn btn-primary active" aria-current="page">Button</a></td>
        </tr>
            </thead>
            <tbody> 
                <?php
                $ql = "select * from categorias";
                $busca_categoria = mysqli_query($conexao, $ql);
                while($array = mysqli_fetch_array($busca_categoria)){
                    $id_categoria = $array ['id_categoria'];
                    $desc_categoria = $array['desc_categoria'];
                
                ?>
            <tr>
                <td><?php echo $id_categoria  ?></td>
                <td><?php echo $desc_categoria ?></td>
                <td><a href= "incluir_categorias.php?id_categoria=<?php echo $id_categoria?>" class="btn btn-info">Edit</a</td>
            </tr>
            <?php }
            ?>
            </tbody>
        </table>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
