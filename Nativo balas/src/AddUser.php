<?php
require_once("../database/UsuarioDao.php");

$CPF = $_POST["CPF"];
$EMAIL = $_POST["EMAIL"];
$SENHA = $_POST["SENHA"];
$CEP = $_POST["CEP"];
$TEL = $_POST["TEL"];
$RUA = $_POST["RUA"];
$NUMERO = $_POST["NUMERO"];
$BAIRRO = $_POST["BAIRRO"];
$CIDADE = $_POST["CIDADE"];
$ESTADO = $_POST["ESTADO"];


$dao = new UsuarioDao();
$checa_email = $dao->chamaEmail($EMAIL);
if(!$checa_email){
    $usuario = $dao->addUsuario($CPF, $EMAIL, $SENHA, $CEP, $TEL, $RUA, $NUMERO, $BAIRRO, $CIDADE, $ESTADO);
    $saida = ["msg" => "Email cadastrado com susseso", "status" => true];
}else{
    $saida = ["msg" => "Ja há este email cadastrado", "status" => false];
}
echo json_encode($saida);
?>