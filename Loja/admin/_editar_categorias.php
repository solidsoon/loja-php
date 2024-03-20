<?php
include 'connection.php';
$desc_categoria = $_POST['desc_categoria'];
$id_categoria= $_POST['id_categoria'];
$ql = "UPDATE categorias SET desc_categoria = '$desc_categoria' WHERE categorias.id_categorias = $id_categoria";
$inserir = mysqli_query($conexao, $ql );
?>

<center>
    <h4>categoria alterada com sucesso</h4>
    </center>

    <a href="lista_categorias.php">Voltar</a>
<head>
    <style>
        div{ 
    display: flex;
    
}
</head>
<div> 
<title>Editar categorias</title>
</div>

<div>
<a href="lista_categorias.php">Voltar</a>
</div>

