<?php
session_start();
include_once("../../database/UsuarioDao.php");

$CPF = $_SESSION["USER_LOG"][1];
$EMAIL = $_POST["EMAIL"];

$dao = new UsuarioDao();
$usuario = $dao->MudaEmail($CPF, $EMAIL);
header("Location: ../minhasInfo.php");
?>