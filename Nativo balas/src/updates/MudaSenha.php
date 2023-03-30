<?php
session_start();
include_once("../../database/UsuarioDao.php");

$CPF = $_SESSION["USER_LOG"][1];
$SENHA = $_POST["SENHA"];
$SENHA = sha1($SENHA);
$dao = new UsuarioDao();
$usuario = $dao->MudaSenha($CPF, $SENHA);
header("Location: ../minhasInfo.php");
?>