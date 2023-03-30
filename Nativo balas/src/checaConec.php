<?php
require_once("../database/Conexao.php");

$con = new Conexao();

if($con->getConec()){
    echo "FOI!!!!!!!!!!!!!";
}
?>