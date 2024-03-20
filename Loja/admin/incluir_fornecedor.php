<html>
<head>
    <title>categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"crossorigin="anonymous">
</head>
<body>
    <?php
include 'menu.php';
    ?>
<div class="container">
    
        <h3>Inclusão de fornecedores</h3>
        <!--tag form = form de html, action vai enviar dados para outra pag -->
        <form action="_incluir_fornecedores.php" method="post">
            <label for="#">Dados do fornecedor</label>
            <!--Input entrada de dados -->
            <input class="form-control" type="text" name="id_fornecedor" required>
            <label>ID</label>

            <input class="form-control" type="text" name="nome_fornecedor" required>
            <label>Fornecedor</label>
            
            <input class="form-control" type="text" name="cpf_cnpj" required>
            <label>CPF/CNPJ</label>
    
            <input class="form-control" type="text" name="cep" required>
            <label>CEP</label>
    
            <input class="form-control" type="text" name="logradouro" required>
            <label>Logradouro</label>
    
            <input class="form-control" type="text" name="numero" required>
            <label>Numero</label>
    
            <input class="form-control" type="text" name="complemento" required>
            <label>Complemento</label>
    
            <input class="form-control" type="text" name="email" required>
           <label>Email</label>

            <input class="form-control" type="text" name="celular" required>
            <label>Celular</label>
    
            <input class="form-control" type="text" name="uf" required>
            <label>UF</label>

            <div class="container">
            <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
            </div>
            
             </form>


         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
</body>


</html>