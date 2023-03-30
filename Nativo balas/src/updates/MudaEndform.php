<?php
include("../../include/header.php");
?>
<p style="color:white">Mude o endereço</p>
<div class="d-flex justify-content-center">
    <form action="MudaEnd.php" method="post">
        <div class="p-2"><input type="text" id="CEP" class="form-control" name="CEP" placeholder="CEP"></div>
        <div class="p-2"><input type="text" id="RUA" class="form-control" name="RUA" placeholder="Rua"></div>
        <div class="p-2"><input type="number" id="NUMERO" class="form-control" name="NUMERO" placeholder="Numero"></div>
        <div class="p-2"><input type="text" id="BAIRRO" class="form-control" name="BAIRRO" placeholder="Bairro">  </div>
        <div class="p-2"><input type="text" id="CIDADE" class="form-control" name="CIDADE" placeholder="Cidade"></div>
        <div class="p-2"><input type="text" id="ESTADO" class="form-control" name="ESTADO" placeholder="Estado"></div>
        <div class="p-2"><input class="form-control" type="submit"></div>
        <div class="p-2 text-center"><a class="form-control" href="../minhasInfo.php">Voltar</a></div>
    </form>