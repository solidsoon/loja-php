<?php
    include 'connection.php';
 
    $id_cliente = $_GET['id_cliente'];
    $id_produto = $_GET['id_produto'];
    $data = date("Y-m-d H:i:s");
 
    $sql = "SELECT * FROM carrinho WHERE id_cliente = $id_cliente";
    $buscar = mysqli_query($conexao,$sql);
    $existe = 0;
    while ($array = mysqli_fetch_array($buscar)) {
        $existe=1;
        $id_carrinho=$array['id_carrinho'];
    }    
 
    if($existe == 0) {
    $sql = "INSERT INTO carrinho (id_cliente, data) VALUES ('$id_cliente', '$data')";
    $inserir = mysqli_query($conexao, $sql);
    $sql = "SELECT max(id_carrinho) FROM carrinho";
    $buscar_novo = mysqli_query($conexao,$sql);
    while ($array = mysqli_fetch_array($buscar_novo)) {
        $id_carrinho=$array['id_carrinho'];
    }  
 
    }
 
    $sql = "INSERT INTO carrinho_itens (id_carrinho, id_produto) VALUES ('$id_carrinho', '$id_produto')";
    $inserir_item = mysqli_query($conexao, $sql);
 
    header('location:index.php');
 
?>