
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/logo_nossaloja.png" width="130px">Minha Loja</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin/lista_produtos.php">Produtos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tabelas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="admin/lista_categoria.php">Categorias</a></li>
            <li><a class="dropdown-item" href="admin/lista_fornecedores.php">Fornecedores</a></li>
            <li><a class="dropdown-item" href="admin/lista_usuario.php">Usuários</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin/admin.php">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>