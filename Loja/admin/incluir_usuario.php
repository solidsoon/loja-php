<html>
<head>
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"crossorigin="anonymous">
</head>
<body>
    <?php
include 'menu.php';
    ?>

<div class="container">
        <h3>Inclusão de Usuarios</h3>
        <!--tag form = form de html, action vai enviar dados para outra pag -->
        <form action="_incluir_usuario.php" method="post">
            
            <!--Input entrada de dados -->

            <label>Nome de usuario</label>
            <input class="form-control" type="text" name="nome_usuario" required>
            
            <label>Digite sua senha</label>
            <input class="form-control" type="password" name="senha" required>
    
            <label>Digite seu email</label>
            <input class="form-control" type="email" name="email" required>

            <br>

            <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
            
             </form>


         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
</body>


</html>