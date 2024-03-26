<?php
    // _editar_itens.php
    include 'connection.php';
    $id_item = $_POST['id_item'];
    $quantidade = $_POST['quantidade'];
 
    $sql="select * from carrinho_itens INNER JOIN produtos on carrinho_itens.id_produto=produtos.id_produto where id_item=$id_item";
    $buscar = mysqli_query($conexao,$sql); // 
    while ($array = mysqli_fetch_array($buscar)) { 
        $preco       = $array['preco'];
        $id_carrinho = $array['id_carrinho'];
    } 
 
    $sql = "update carrinho_itens set quantidade=$quantidade,valor_unitario=$preco,valor_total=$quantidade * $preco where id_item=$id_item";
   //echo($sql);
   $alterar = mysqli_query($conexao,$sql);
 ?>  
 
<center>
    <h4>Item Alterado com Sucesso!</h4>
    <a href="carrinho.php?id_carrinho=<?php echo($id_carrinho) ?>" class="btn btn-primary">Voltar</a>
</center>