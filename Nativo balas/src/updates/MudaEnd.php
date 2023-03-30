<?php
session_start();
include_once("../../database/UsuarioDao.php");

$CPF = $_SESSION["USER_LOG"][1];
$CEP = $_POST["CEP"];
$RUA = $_POST["RUA"];
$NUMERO = $_POST["NUMERO"];
$BAIRRO = $_POST["BAIRRO"];
$CIDADE = $_POST["CIDADE"];
$ESTADO = $_POST["ESTADO"];

$dao = new UsuarioDao();
$usuario = $dao->MudaEnd($CEP, $RUA, $NUMERO, $BAIRRO, $CIDADE, $ESTADO, $CPF);
header("Location: ../minhasInfo.php");
?>