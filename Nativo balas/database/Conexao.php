<?php
class Conexao{
    private $server = "localhost";
    private $usuario = "web";
    private $senha = "web";
    private $banco = "COISAS";

    public function getConec(){
        try{
            $con = new pdo("mysql:host=". $this->server. "; dbname=". $this->banco, $this->usuario, $this->senha);
        } catch (PDOException $e) {
            die("Conexão não funcionou ->". $e->getMessage());
        }
        return $con;
    }
}
?>