<?php
include 'menu.php';
include 'connection.php';
$id_usuario = $_GET['id_usuario'];
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Excluir usuario</title>
</head>



<body>
    <h4>Excluir um usuario</h4>

    <form action="_excluir_usuario.php" method="post">
    <?php
    $sql = "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'";
    $buscar = mysqli_query($conexao, $sql);
    while ($array = mysqli_fetch_array($buscar)) {
        $id_usuario = $array['id_usuario'];
        ?>
        <input type="hidden" name="id_usuario" value="<?php echo $id_usuario ?>">
        <button type="submit" id="botao">Excluir</button>
        <?php
    } ?>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>


</html>