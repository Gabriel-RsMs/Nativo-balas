<?php
include("../../include/header.php");
?>
<div class="d-flex justify-content-center">
<p style="color:white">Mude o e-mail</p>
</div>
<div class="d-flex justify-content-center">
    <form action="MudaEmail.php" method="post">
        <div class="p-2"><input type="text" id="EMAIL" class="form-control" name="EMAIL" placeholder="E-mail"></div>
        <div class="p-2"><input class="form-control" type="submit"></div>
        <div class="p-2 text-center"><a class="form-control" href="../minhasInfo.php">Voltar</a></div>
    </form>