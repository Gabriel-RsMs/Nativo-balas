<?php
//include("../erro.php");
include("../include/header.php");
require_once("../database/CalibreDao.php");
require_once("../database/CategoriaDao.php");

$ID_CAL = $_GET["ID_CAL"];
$dao = new CalibreDao();
$calibre = $dao->buscaCalibre($ID_CAL);

$dao = new CategoriaDao();
$lista_categoria = $dao->listarCategoria();

if($calibre["LANCAMENTO"] == 1){
    $lancamento = "checked='checked'";
}else{
    $lancamento = "";
}
?>
<div class="d-flex justify-content-center">
<h5 style="color:white">Alterar Calibre</h5>
</div>
<div class="d-flex justify-content-center">
<form action="update.php" method="post" style="color:white">
    <input type="hidden" name="ID_CAL" value="<?=$ID_CAL?>">
    <div class="form-group">
        <label for="CAL_NOME">Nome do calibre:</label>
        <input type="text" class="form-control" id="CAL_NOME" name="CAL_NOME" value="<?=$calibre["CAL_NOME"]?>">
    </div>
    <div type="form-group">
        <label for="PRECO">Preço: </label>
        <input type="text" class="form-control" id="PRECO" name="PRECO" value="<?=$calibre["PRECO"]?>">
    </div>
    <div type="form-group">
        <label for="ID_CAT">Categoria: </label>
        <select id="ID_CAT" name="ID_CAT" class="form-control">
            <?php foreach($lista_categoria as $categoria) :
            $estaSelecionado = $calibre["ID_CAT"] == $categoria["ID_CAT"];
            $atributoSelected = $estaSelecionado ? "selected='selected'" : "";            
            ?> 
            <option value="<?=$categoria["ID_CAT"]?>" <?=$atributoSelected?>>
            <?=$categoria["DESCRICAO"]?>
            </option>
            <?php endforeach ?>
        </select>
    </div>
    <label for="LANCAMENTO">Lançamento</label>
    <input type="checkbox"  id="LANCAMENTO" name="LANCAMENTO" <?=$lancamento?>><br>
    <label for="ADD_DATA">Data de cadastro:</label> 
    <input type="date" id="ADD_DATA" class="form-control" name="ADD_DATA" value="<?=$calibre["ADD_DATA"]?>"><br>
    <button type="submit" value="ins" class="form-control">Alterar</button>
</form>
</div>