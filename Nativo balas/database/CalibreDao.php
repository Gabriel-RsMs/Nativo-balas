<?php
session_start();
require_once("Conexao.php");

class CalibreDao{
    private $con;

    public function __construct(){
        $conec = new Conexao();
        $this->con  = $conec->getConec();
    }

    public function listarCalibre(){
        $sql = "SELECT c.*, ca.DESCRICAO
            FROM CALIBRE c
            JOIN CATEGORIA ca
            ON c.ID_CAT = ca.ID_CAT";
        try{
        $stmt = $this->con->query($sql);
        $calibres = $stmt->fetchAll();
        return $calibres;
        } catch (PDOException $e){
            die("Calibres não listados". $e->getMessage());
        }
    }

    public function addCalibre($CAL_NOME, $PRECO, $ID_CAT, $LANCAMNETO, $ADD_DATA){
        $sql = "INSERT INTO CALIBRE (CAL_NOME , PRECO, ID_CAT, LANCAMENTO, ADD_DATA) 
            VALUES (?, ?, ?, ?, ?)";
        try{    
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(1, $CAL_NOME);
            $stmt->bindValue(2, $PRECO);
            $stmt->bindValue(3, $ID_CAT);
            $stmt->bindValue(4, $LANCAMNETO);
            $stmt->bindValue(5, $ADD_DATA);
            $stmt->execute();
            $_SESSION["msg"] = "O produto {$CAL_NOME} foi inserido!";
        } catch (PDOException $e){
            die("O calibre {$CAL_NOME} não pôde ser adicionado". $e->getMessage());
        }
    }

    public function remCalibre($ID_CAL){
        $sql = "DELETE FROM CALIBRE
                WHERE ID_CAL = ?";
        try{
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(1, $ID_CAL);
            $stmt->execute();
            $_SESSION["msg"] = "O calibre {$ID_CAL} foi deletado!";
        } catch (PDOException $e){
            die("Calibre não pode ser removido". $e->getMessage());
        }
    }

    public function upCalibre($CAL_NOME, $PRECO, $ID_CAT, $ID_CAL, $LANCAMENTO, $ADD_DATA){
        $sql = "UPDATE CALIBRE SET CAL_NOME = ?, PRECO = ?, ID_CAT = ?, LANCAMENTO = ?, ADD_DATA = ? WHERE ID_CAL = ?";
        try{
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(1, $CAL_NOME);
            $stmt->bindValue(2, $PRECO);
            $stmt->bindValue(3, $ID_CAT);
            $stmt->bindValue(4, $LANCAMENTO);
            $stmt->bindValue(5, $ADD_DATA);
            $stmt->bindValue(6, $ID_CAL);
            $stmt->execute();
            $_SESSION["msg"] = "O calibre {$CAL_NOME} foi alterado!";
        }catch (PDOException $e) {
            die("O calibre não foi alterado! " . $e->getMessage());
          }
    }

    public function buscaCalibre($ID_CAL){
        $sql = "SELECT * FROM CALIBRE WHERE ID_CAL = ?";
        try {
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(1, $ID_CAL);
            $stmt->execute();
            $calibre = $stmt->fetch();
            return $calibre;
        } catch (PDOException $e) {
            die("Calibre não encontrado". $e->getMessage());
        }
    }
}
?>