<!DOCTYPE html>
<html lang="pt-br">

<html>
    <!-- incluir_produtos.php -->
   <head>
       <title>Inclusão de Produtoss</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   </head>
 
   <body>
      <?php
        include 'connection.php';
        include 'menu.php';
      ?>
      <div class = "container"> 
      <h4>Inclusão de Produtos</h4>
      <!-- tag form = formulário do html, action vai enviar os dados para outra página  -->
      <form action="_incluir_produtos.php" method="post">
          <label>Descrição</label>
          <input type="text" name="desc_produto" class="form-control" required>
          <label>Categoria</label>
          <select name="id_categoria" class="form-control">
          <?php  
          $sql = "select * from categorias order by desc_categoria";
          $busca_categoria = mysqli_query($conexao,$sql);
          while ($array = mysqli_fetch_array($busca_categoria)) {
                $id_categoria = $array['id_categoria'];
                $desc_categoria = $array['desc_categoria'];
                ?>
             <option value="<?php echo("$id_categoria") ?>">
             <?php echo("$desc_categoria") ?></option>
 
             <?php
             }
             ?>
          </select>   
 
          <label>Fornecedor</label>
          <select name="id_fornecedor" class="form-control">
          <?php  
          $sql = "select * from fornecedores order by nome_fornecedor";
          $busca_fornecedor = mysqli_query($conexao,$sql);
          while ($array = mysqli_fetch_array($busca_fornecedor)) {
                $id_fornecedor = $array['id_fornecedor'];
                $nome_fornecedor = $array['nome_fornecedor'];
                ?>
             <option value="<?php echo("$id_fornecedor") ?>">
             <?php echo("$nome_fornecedor") ?></option>
 
             <?php
             }
             ?>
          </select> 
          <label>Preço</label>
          <input type="text" name="preco" class="form-control">
          <label>Imagem</label>
          <input type="file" name="imagem" class="form-control btn btn primary" required>
          <!-- input é entrada de dados. required, torna obrigatória a digitação -->
          <br><br>
          <button type="submit" id="botao" class="btn btn-primary">Cadastrar</button>
          
      </form>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>     
   </body>
</html>