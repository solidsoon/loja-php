<?php
include("connection.php");
include("menu.php");
$id_usuario = $_GET['id_usuario'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Editar Usuarios</title>
</head>

<body>
  <h4>Alteração de Usuarios</h4>
  <form action="_editar_usuarios.php" method="post">
    <?php
    $sql = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario";
    $buscar = mysqli_query($conexao,$sql);
    while($array = mysqli_fetch_array($buscar)) {
    $id_usuario = $array['id_usuario'];
    $nome_usuario = $array['nome_usuario'];
    $email = $array['email'];
    $senha = $array['senha'];
    ?>
    <input type="hidden" name="id_usuario" value="<?php echo $id_usuario ?>">
    <label for="nome_usuario">Nome do Usuário</label>
    <input type="text" name="nome_usuario" value="<?php echo $nome_usuario ?>">
    <label for="email">Email do Usuário</label>
    <input type="email" name="email_usuario" value="<?php echo $email ?>">
    <label for="password">Senha do Usuario</label>
    <input type="password" name="senha" value="<?php echo $senha ?>">
    <button type="submit" id="botao">Aplicar Edições</button>
    <?php } ?>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>