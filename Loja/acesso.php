<html>
<!-- acesso.php -->    
<head>
  <title>Login</title
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- box shadow cssmatic -->
<style type="text/css">
    #tamanho {
        width: 350px;
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);;    
  
    }
</style>    
 
</head>
<body>
<center>
<br/><br/><br/>         
<div class="container" id="tamanho"> <!-- style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3">-->
<div style="padding: 10px">  <!-- espaçamento entre os objetos -->
<img src="images/logo_nossaloja.png" width="250px">
<form action="login.php" method="post">
    <div class="form-group">
        <label>Usuário</label>
        <input type="text" name="email_cliente" class="form-control" 
        placeholder="Usuário" autocomplete="off" required>
    </div>
     <div class="form-group">
        <label>Senha</label>
        <input type="password" name="password" class="form-control" 
        placeholder="Senha" autocomplete="off" required>
    </div>
    <div style="text-align: right;"> 
        <br/>
        <button type="submit" id="botao" class="btn btn-primary">Entrar</button>
        <br/>
    </div>  
</form>
</div>
</div>
</center>
 
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>