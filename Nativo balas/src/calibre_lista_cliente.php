<?php
session_start();
include("../erro.php");
include("../include/header.php");
require_once("../database/CalibreDao.php");
include("../util/mensagem.php");
if(!isset($_SESSION["USER_LOG"])){
  header("Location: LoginForm.php");
}

exibirMsg();
$dao = new CalibreDao();
$lista_calibre = $dao->listarCalibre();
?>
<table style="color:white" class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Nome do calibre</th>
      <th scope="col">Preço</th>
      <th scope="col">Categoria</th>
      <th scope="col">Lançamento</th>
      <th scope="col">Compra</th>
    </tr>
  </thead>
    <tbody>
    <?php
    foreach($lista_calibre as $calibre) :
      if($calibre["LANCAMENTO"] == 1){
        $lancamento = "checked ='checked'";
      }else{
        $lancamento = "";
      }
    ?>
    <tr>
    <td><?= $calibre["CAL_NOME"]?></td>
    <td><?= $calibre["PRECO"]?></td>
    <td><?= $calibre["DESCRICAO"]?></td>
    <td>
    <input type="checkbox" name="LANCAMENTO" <?=$lancamento?> disabled>    
    </td>
    <td><a href="compra.php">Comprar</a></td>
    <?php
    endforeach
  ?>
    </tbody>
</table>
