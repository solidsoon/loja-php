<html>
<head>
    <title>categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"crossorigin="anonymous">
</head>
<body>
    <?php
include 'menu.php';
    ?>
    <h4>Inclusão de categorias</h4>
    <!--tag form = form de html, action vai enviar dados para outra pag -->
    <form action="incluir_fornecedor.php" method="post">
        <label for="">Descrição</label>
        <!--Input entrada de dados -->
        <input type="text" name="desc_categoria" required>
        <button type="submit" id="botao">Cadastrar</button>
         </form>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
</body>
</body>


</html>