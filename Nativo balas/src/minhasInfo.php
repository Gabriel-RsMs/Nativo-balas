<?php
session_start();

if(!isset($_SESSION["USER_LOG"])){
    header("Location: ../src/LoginForm.php");
  }

include("../include/header.php");
include("../database/UsuarioDao.php");
$dao = new UsuarioDao();
$user = $dao->mostraInfo($_SESSION["USER_LOG"][1]);
?>
<p style="color:white">E-mail: <?= $user["EMAIL"]?></p>
<p style="color:white">Telefone/s: <?= $user["TEL"]?></p>
<p style="color:white">CEP: <?= $user["CEP"]?></p>
<p style="color:white">Rua: <?= $user["RUA"]?></p>
<p style="color:white">Numero: <?= $user["NUMERO"]?></p>
<p style="color:white">Bairro: <?= $user["BAIRRO"]?></p>
<p style="color:white">Cidade: <?= $user["CIDADE"]?></p>
<p style="color:white">Estado: <?= $user["ESTADO"]?></p>

<div class="d-flex justify-content-left">
<div class="p-2">
<a href="updates/MudaSenhaform.php" > 
        <button type="button" class="form-control">Mudar senha</button>
</a>
<br>
<a href="updates/MudaEmailform.php" > 
        <button type="button" class="form-control">Mudar e-mail</button>
</a>
<br>
<a href="updates/MudaEndform.php" > 
        <button type="button" class="form-control">Mudar endereço</button>
</a>
</div>
</div>