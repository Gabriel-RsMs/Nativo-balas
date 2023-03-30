<?php
require_once("Conexao.php");

class CategoriaDao{
    private $con;

    public function __construct(){
        $Conexao = new Conexao();
        $this->con = $Conexao->getConec();
    }


    public function listarCategoria(){
        $sql = "SELECT * FROM CATEGORIA";
        try{
            $stmt = $this->con->query($sql);
            $categoria = $stmt->fetchAll();
            return $categoria;
        }catch (PDOException $e){
            die("Categoria não encontrada". $e->getMessage());
        }
    }
}
?>