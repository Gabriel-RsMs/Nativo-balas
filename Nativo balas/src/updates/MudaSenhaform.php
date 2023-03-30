<?php
include("../../include/header.php");
?>
<div class="d-flex justify-content-center">
<p style="color:white">Insira a nova senha</p>
</div>
<div class="d-flex justify-content-center">
    <form action="MudaSenha.php" method="post">
        <div class="p-2"><input type="number" id="SENHA" class="form-control" name="SENHA" placeholder="SENHA"></div>
        <div class="p-2"><input class="form-control" type="submit"></div>
        <div class="p-2 text-center"><a class="form-control" href="../minhasInfo.php">Voltar</a></div>
    </form>
</div>