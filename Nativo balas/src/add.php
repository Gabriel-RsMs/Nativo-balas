<?php
session_start();
if($_SESSION["USER_LOG"][0] == 0){
    header("Location: home.php");
 }
if(!isset($_SESSION["USER_LOG"])){
  header("Location: LoginForm.php");
}

require_once("../database/CategoriaDao.php");
include("../include/header.php");
$dao = new CategoriaDao();
$lista_categoria = $dao->listarCategoria();
?>
<div class="d-flex justify-content-center">
<h5 style="color:white">Inserir calibre</h5>
</div>
<div class="d-flex justify-content-center">
<form action="inserir.php" method="post" style="color:white">
    <div class="form-group">
        <label for="CAL_NOME">Nome do calibre:</label> 
        <input type="text" class="form-control" id="CAL_NOME" name="CAL_NOME"><br>
    </div>
    <div class="form-group">
        <label for="PRECO">Preço do calibre:</label> 
        <input type="number" class="form-control" id="PRECO" name="PRECO">      
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
    <div type="form-group">
        <label for="LANCAMENTO">Lançamento:</label>
        <input type="checkbox"  id="LANCAMENTO" name="LANCAMENTO"><br>
    </div>
    <div type="form-group">
        <label for="ADD_DATA">Data de cadastro:</label> 
        <input type="date" class="form-control" id="ADD_DATA" name="ADD_DATA"><br>
    </div>            
    <button type="submit" class="form-control" value="sub">Inserir</button>
</form>
</div>