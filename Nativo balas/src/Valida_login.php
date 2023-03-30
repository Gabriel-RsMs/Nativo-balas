<?php
session_start();
require_once("../database/UsuarioDao.php");

$EMAIL = $_POST["EMAIL"];
$SENHA = $_POST["SENHA"];

$dao = new UsuarioDao();
$usuario = $dao->buscarUsuario($EMAIL, $SENHA);
$saida = "";

if($usuario){
    $stringMuitoMassa = [$usuario["ADM"], $usuario["CPF"]];
    $_SESSION["USER_LOG"] = $stringMuitoMassa;  
    $saida = ["msg" => "ok"];
}else {
    $saida = ["msg" => "erro"];
}

echo json_encode($saida);
?>