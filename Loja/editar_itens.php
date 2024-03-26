<?php
// index.php
session_start();
if(isset($_SESSION['nome_cliente'])) {
$id_cliente= $_SESSION['id_cliente'];
$nome_cliente = $_SESSION['nome_cliente'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Nossa Loja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
<style>
    .custom-img {
        width: 70%; /* Define a largura da imagem como 100% da largura do contêiner pai */
        height: auto; /* Define a altura como automática para manter a proporção da imagem */
        transition: transform 0.2s ease; /* Adiciona transição para o efeito de zoom */
    }
 
    /* Adiciona sombra aos cards */
    .card {
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
        height: 450px;
   
    }
 
    /* Reduz o tamanho das opções no select */
    select.form-control {
        font-size: 0.8rem; /* Define o tamanho da fonte */
        padding: 0.25rem 0.5rem; /* Ajusta o padding */
        width: 150px; /* Define a largura do select */
    }
 
    /* Efeito de zoom na imagem ao passar o mouse sobre ela */
    .custom-img:hover {
        transform: scale(1.2); /* Aumenta o tamanho da imagem em 10% */
    }
 
</style>
 
</head>
<body>
<div class="container">
    <?php
    include('menu.php');
    include('connection.php');
    $id_item = $_GET['id_item'];
    ?>
    <?php
    $sql = "select * from carrinho_itens inner join produtos on carrinho_itens.id_produto=produtos.id_produto where id_item=$id_item";
    $editar_carrinho = mysqli_query($conexao,$sql);
    while ($array = mysqli_fetch_array($editar_carrinho)) {
      $id_produto = $array["id_produto"];
      $desc_produto = $array["desc_produto"];
      $quantidade = $array["quantidade"];
      $preco = $array["preco"];
    }
    ?>
    <form action="_editar_itens.php" method="post">
    <p>Produto: <?php echo $desc_produto ?></p>
    <input type="hidden" name="id_item" value="<?php echo($id_item) ?>">
    <p>Entre com a quantidade: <input type="number" min="1" name="quantidade"></p>
    <button type="submit" id="botao" class="btn btn-primary">Atualizar</button>
    </form>
</div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>