<html>

<head>
    <title>Nossa Loja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        include 'menu.php';
        include 'connection.php';
        ?>
        <div class="d-grid gap-3 d-md-flex justify-content-md-end-left">
            <button class="btn btn-primary me-md-2" type="button">Cadastre-se</button>
            <button class="btn btn-primary" type="button">Login</button>
        </div>
        <br />
        <br />
        <div class="row align-items-start">
            <div class="col">
                <label>SELECT CATEGORY</label>
                <form action="index.php" method="post">
                    <select name="categoria" class="form-control">
                        <option selected hidden>Categorias</option>
                        <option value="1">Camisetas</option>
                        <option value="2">Pants</option>
                        <option value="3">Shoes</option>
                    </select>
            </div>
            <div class="col">
                </br>
                <button type="submit" id="botao" class="btn btn-primary">Select</button>
            </div>
            </form>
        </div>
        <br />
        <div class="row align-items-start">
            <?php
            $sql = "SELECT * FROM produtos";
            $busca_produto = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($busca_produto)) {
                $id_produto = $array['id_produto'];
                $desc_produto = $array['desc_produto'];
                $preco = $array['preco'];
                $imagem = $array['imagem'];
                ?>
                <div class="col-4">
                    <div class="card">
                        <img src="images/<?php echo ("$imagem") ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo ("$desc_produto") ?>
                            </h5>
                            <p class="card-text">U$
                                <?php echo (number_format($preco, 2, ".", ".")) ?>
                            </p>
                            <a href="#" class="btn btn-primary">Adicione ao Carrinho</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="images/<?php echo ("$imagem") ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo ("$desc_produto") ?>
                            </h5>
                            <p class="card-text">R$
                                <?php echo (number_format($preco, 2, ",", ",")) ?>
                            </p>
                            <a href="#" class="btn btn-primary">Adicione ao Carrinho</a>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>