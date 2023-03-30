<!DOCTYPE html>
<html lang="pt=BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="../logo/a1821b0d303f6f047692071f51935738.jpg">
  <title>Nativo Balas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background-color:black;">
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <a class="navbar-brand" href="../public/index.php">Nativo Balas</a>
      <div class="navbar-nav">
        
      </div>
    </nav>
  </header>
  <br>
<div class="d-flex justify-content-center">
<div class="p-2"><h1 style="color:white">Login</h1>
    <form>
      <fieldset>
        <div class="p-2"><input type="text" class="form-control" id="EMAIL" name="EMAIL" placeholder="E-mail"></div>
        <div class="p-2"><input type="text" class="form-control" id="SENHA" name="SENHA" placeholder="Senha"></div>
        <div class="p-2"><button id="subt" type="button" class="form-control">Enviar</div>
        <div id="erroLogin" style="display: none;">
            <div class="alert alert-danger">
              Email ou senha errados
            </div>
        </div>
      </fieldset>
    </form>
    <a href="AddUserForm.php" > 
        <button type="button" class="form-control">Crie uma conta</button>
    </a>
</div>
<script src="coiso.js"></script>
</body>
</html>
