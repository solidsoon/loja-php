<?php
// carrinho.php
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
      include 'menu.php';
      include 'connection.php';
    ?>     
     <table class="table table-hover">
        <thead>
        <tr>
            <th>ID. Produto</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>quantidade</th>
            <th>Valor Unitário</th>
            <th>Valor Total</th>
            <th>Editar</th>
        </tr>
        </thead>
        <tbody>
 
    <?php
    $id_carrinho = $_GET['id_carrinho'];
    $sql="select *,carrinho_itens.quantidade as qtde from carrinho INNER JOIN carrinho_itens on carrinho.id_carrinho=carrinho_itens.id_carrinho INNER JOIN produtos on carrinho_itens.id_produto=produtos.id_produto INNER JOIN categorias on produtos.id_categoria=categorias.id_categoria INNER JOIN fornecedores on produtos.id_fornecedor=fornecedores.id_fornecedor where carrinho.id_carrinho=$id_carrinho order by produtos.desc_produto";
    //echo($sql);
    $busca_carrinho =  mysqli_query($conexao,$sql);
    $total_compra = 0;
    while ($array = mysqli_fetch_array($busca_carrinho)) {
        $id_produto = $array['id_produto'];
        $desc_produto = $array['desc_produto'];
        $preco = $array['preco'];
        $desc_categoria = $array['desc_categoria'];
        $nome_fornecedor = $array['nome_fornecedor'];
        $quantidade = $array['qtde'];
        $valor_unitario = $array['valor_unitario'];
        $valor_total = $array['valor_total'];
        $id_cliente = $array['id_cliente'];
        $id_item = $array['id_item'];
        $total_compra = $total_compra + $valor_total;
    ?>
        <tr>
            <td><?php echo $id_produto ?></td>
            <td><?php echo $desc_produto ?></td>
            <td><?php echo $desc_categoria ?></td>
            <td><?php echo $quantidade ?></td>
            <td><?php echo $valor_unitario ?></td>
            <td><?php echo $valor_total ?></td>
            <td><a href="editar_itens.php?id_item=<?php echo $id_item ?>" class="btn btn-warning">Editar</a></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>
</div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>     
</body>
</html>