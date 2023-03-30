<?php
session_start();

if($_SESSION["USER_LOG"][0] == 0){
header("Location: home.php");
}

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
      <th scope="col">Data de cadastro</th>
      <th scope="col">Lançamento</th>
      <th scope="col">Remover</th>
      <th scope="col">Alterar</th>
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
    <td><?= $calibre["ADD_DATA"]?></td>
    <td>
    <input type="checkbox" name="LANCAMENTO" <?=$lancamento?> disabled>    
    </td>
    <td>
        <form action="remove.php" method="post">
            <input type="hidden" name="ID_CAL" value="<?=$calibre["ID_CAL"]?>">
            <button class="btn btn-outline-danger" type="submit" value="del">Remover</button>
        </form>
    </td>
    <td>
      <a href = "upForm.php?ID_CAL=<?=$calibre["ID_CAL"]?>">
        <button class="btn btn-outline-primary">Alterar</button>
      </a>
      </form>
    </td>
    </tr>
    <?php
    endforeach
  ?>
  </tbody>
</table>
