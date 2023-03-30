<?php
require_once("../database/CalibreDao.php");
$nome = $_POST["ID_CAL"];
$dao = new CalibreDao();
$dao->remCalibre($nome);

header("Location: calibre_lista.php");
?>