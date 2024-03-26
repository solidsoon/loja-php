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
      include 'menu.php';
      include 'connection.php';
    ?>
    <div> 
    <b><a href="registro.php">Cadastre-se</a><br/><a href="acesso.php">Entre com seu Login</a></b>
    </div>
    <br/>
    <br/>
    <center>
    <?php
      $carrinho=false; // false = sem carrinho / true = existe carrinho
      if(isset($_SESSION['nome_cliente'])) {
      echo("<b>Bem vindo, $nome_cliente</b>");
      $sql = "select * from carrinho where id_cliente = $id_cliente";
              $busca_carrinho = mysqli_query($conexao, $sql);
              while ($array = mysqli_fetch_array($busca_carrinho)) {
                $id_carrinho = $array['id_carrinho'];
                $carrinho=true; // achou carrinho
               } 
            }               
       ?> 
    </center> 
    <div align="right">
        <?php if($carrinho == true) { ?>

   
        <div><b>Você tem algo no carrinho!</b></div>
        <div><b>Clique no carrinho abaixo.</b></div>
        <a href="carrinho.php?id_carrinho=<?php echo($id_carrinho)?>"><img src="images/carrinho.png" width="85px"></a>
        <?php } ?>
    </div>
    <div class="row align-items-start">
        <div class="col">    
            <form action="index.php" method="post" class="d-flex">
                <label class="me-2">Selecione uma categoria</label>
                <select name="categoria" class="form-control me-2">
                    <option value="0">--- Todas ---</option>
                    <?php
                    $sql = "select * from categorias order by desc_categoria";
                    $busca_categoria = mysqli_query($conexao,$sql);
                    while ($array = mysqli_fetch_array($busca_categoria)) {
                        $id_categoria = $array['id_categoria'];
                        $desc_categoria = $array['desc_categoria'];
                    ?>
                    <option value="<?php echo($id_categoria)?>"><?php echo($desc_categoria)?></option>
                    <?php } ?>    
                </select>
                <button type="submit" id="botao" class="btn btn-primary">Selecionar</button>
            </form>
        </div>
    </div>
    <br/>
    <div class="row align-items-start">
        <?php
        if( isset($_POST['categoria']) ) {
            $nova_categoria = $_POST['categoria'];
        } else {
            $nova_categoria = 0;
        }
        $parametro="";
        if ($nova_categoria != 0) {
            $parametro="where produtos.id_categoria = $nova_categoria";
        }
        $sql = "select * from produtos INNER JOIN categorias on produtos.id_categoria=categorias.id_categoria INNER JOIN fornecedores on produtos.id_fornecedor=fornecedores.id_fornecedor $parametro order by produtos.desc_produto";
        $busca_produto = mysqli_query($conexao,$sql);
        while ($array = mysqli_fetch_array($busca_produto)) {
            $id_produto = $array['id_produto'];
            $desc_produto = $array['desc_produto'];
            $desc_categoria = $array['desc_categoria'];
            $nome_fornecedor = $array['nome_fornecedor'];
            $preco = $array['preco'];
            $imagem = $array['imagem'];
        ?>
        <div class="card-deck col-sm-6 col-md-4" style="max-width: 20rem;">
             <div class="card">
                <div class="d-flex justify-content-center align-items-center" style="height: 250px;"> <!-- Alinha a imagem ao centro verticalmente e horizontalmente -->
                   <img src="images/<?php echo("$imagem")?> " class="card-img-top custom-img" alt="..." width="250"> 
                </div>
               <div class="card-body">
                <h5 class="card-title text-center"><?php echo("$desc_produto")?></h5>
                <p class="card-text text-center">R$ <?php echo(number_format($preco,2,",","."))?></p>
                <div class="d-flex justify-content-center"> <!-- Centraliza o botão -->
                  <a href="_cria_carrinho.php?id_cliente=<?php echo($id_cliente)?>&id_produto=<?php echo($id_produto)?>" class="mt-auto btn btn-primary">Adicione ao carrinho</a>
            </div>
            </div>
            </div>
            </br>
            </div>
        <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>     
</body>
</html>