<?php
session_start();
if(!isset($_SESSION["USER_LOG"])){
  header("Location: ../src/LoginForm.php");
}

?>

<!DOCTYPE html>
<html lang="pt=BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="../logo/a1821b0d303f6f047692071f51935738.jpg">
  <title>Nativo Balas</title>
  <script src="../jquery-3.6.1.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background-color:black;">
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <a class="navbar-brand" href="../public/index.php">Nativo Balas</a>
      <div class="navbar-nav">
        <?php
        if($_SESSION["USER_LOG"][0] == 1){
          echo '<a class="nav-item nav-link" href="../src/add.php">Inserir Calibres</a>';
        }else{
          echo "";
        };
        if($_SESSION["USER_LOG"][0] == 1){
          echo '<a class="nav-item nav-link" href="../src/calibre_lista.php">Listar Calibres</a>';
        }else if($_SESSION["USER_LOG"][0] == 0){
          echo '<a class="nav-item nav-link" href="../src/calibre_lista_cliente.php">Listar Calibres</a>';
        };
        if(isset($_SESSION["USER_LOG"])){
          echo '<a class="nav-item nav-link" href="../src/minhasInfo.php">Minhas informações</a>';
        }else{
          echo "";
        }
        
        if(!isset($_SESSION["USER_LOG"])){
          echo"";
        }else{
          echo '<a class="nav-item nav-link" href="../src/logout.php">Sair</a>';
        };
        ?>
      </div>
    </nav>
  </header>
  <br>