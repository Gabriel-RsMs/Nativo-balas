<?php
//include("../erro.php");

require_once("../database/CalibreDao.php");
$CAL_NOME = $_POST["CAL_NOME"];
$PRECO = $_POST["PRECO"];
$ID_CAT = $_POST["ID_CAT"];
if (array_key_exists("LANCAMENTO", $_POST)) {
    $LANCAMENTO = 1;//"true";
  } else {
    $LANCAMENTO = 0;//"false";
  }
$ADD_DATA = $_POST["ADD_DATA"];

$dao = new CalibreDao();
$dao->addCalibre($CAL_NOME, $PRECO, $ID_CAT, $LANCAMENTO, $ADD_DATA);

header("Location: calibre_lista.php");
?>