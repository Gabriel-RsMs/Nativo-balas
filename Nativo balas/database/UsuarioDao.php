<?php
require_once("Conexao.php");

class UsuarioDao{
    private $con;

    public function __construct(){
        $conexao = new Conexao();
        $this->con = $conexao->getConec();
    }

    function buscarUsuario($EMAIL, $SENHA) {
        $senha_sha1 = sha1($SENHA);
        $sql = "SELECT * FROM USUARIO
                WHERE EMAIL = ? AND SENHA = ?";
        try {
          $stmt = $this->con->prepare($sql);
          $stmt->bindValue(1, $EMAIL);
          $stmt->bindValue(2, $senha_sha1);
          $stmt->execute();
          $usuario = $stmt->fetch();
          return $usuario;
        } catch (PDOException $e) {
          die("Usuário não encontrado! " . $e->getMessage());
        }    
    }

    public function addUsuario($CPF, $EMAIL, $SENHA ,$CEP ,$TEL, $RUA, $NUMERO, $BAIRRO, $CIDADE, $ESTADO){
        $senha_sha1 = sha1($SENHA);
        $sql = "INSERT INTO USUARIO (CPF, EMAIL, SENHA)
                VALUES(?, ?, ?)";
        try{
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(1, $CPF);
            $stmt->bindValue(2, $EMAIL);
            $stmt->bindValue(3, $senha_sha1);
            $stmt->execute();
            $this->addTel($CPF, $TEL);
            $this->addEnd($CPF, $CEP, $RUA, $NUMERO, $BAIRRO, $CIDADE, $ESTADO);
        } catch (PDOException $e){
            die("Usuário não foi adicionado! " . $e->getMessage());
        }
    }

    private function AddTel($CPF, $TEL){
        $sql = "INSERT INTO TELEFONE(CPF, TEL)
                VALUES(?,?)";
        try{
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(1, $CPF);
            $stmt->bindValue(2, $TEL);
            $stmt->execute();
        }catch (PDOException $e){
            die("Usuário não foi adicionado! " . $e->getMessage());
        }
    }

    private function addEnd($CPF, $CEP,  $RUA, $NUMERO, $BAIRRO, $CIDADE, $ESTADO){
        $sql = "INSERT INTO ENDERECO(CPF, CEP, RUA, NUMERO, BAIRRO, CIDADE, ESTADO)
                VALUES(?,?,?,?,?,?,?)";
        try{
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(1, $CPF);
            $stmt->bindValue(2, $CEP);
            $stmt->bindValue(3, $RUA);
            $stmt->bindValue(4, $NUMERO);
            $stmt->bindValue(5, $BAIRRO);
            $stmt->bindValue(6, $CIDADE);
            $stmt->bindValue(7, $ESTADO);
            $stmt->execute();
        }catch (PDOException $e){
            die("Usuário não foi adicionado! " . $e->getMessage());
        }
    }

    private function MudaEnd($CPF, $RUA, $NUMERO, $BAIRRO, $CIDADE, $ESTADO){
        $sql = "UPDATE ENDERECO SET CEP = ?,RUA = ?, NUMERO = ?, BAIRRO = ?, CIDADE = ?, ESTADO = ?
                WHERE CPF = ?";
        try{
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(1, $CEP);
            $stmt->bindValue(2, $RUA);
            $stmt->bindValue(3, $NUMERO);
            $stmt->bindValue(4, $BAIRRO);
            $stmt->bindValue(5, $CIDADE);
            $stmt->bindValue(6, $ESTADO);
            $stmt->bindValue(7, $CPF);
            $stmt->execute();
        }catch (PDOException $e){
            die("Endereco não alterado! " . $e->getMessage());
        }
    }

    public function mostraInfo($CPF){
        $sql = "SELECT u.*, t.*, e.*
                FROM USUARIO u, TELEFONE t, ENDERECO e
                WHERE u.CPF = ?
                AND t.CPF = e.CPF
                AND t.CPF = u.CPF";
        try{
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(1, $CPF);
            $stmt->execute();
            $info = $stmt->fetch();
            return $info;
        } catch(PDOException $e){
            die("Calibre não listados". $e->getMessage());
        }
    }

    public function MudaEmail($CPF, $EMAIL){
        $sql = "UPDATE USUARIO SET EMAIL = ?
                WHERE CPF= ?";
        try{
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(1, $EMAIL);
            $stmt->bindValue(2, $CPF);
            $stmt->execute();
        }catch (PDOException $e){
            die("Email não alterado! ". $e->getMessage());
        }
    }

    public function MudaSenha($CPF, $SENHA){
        $sql = "UPDATE USUARIO SET SENHA = ?
                WHERE CPF= ?";
        try{
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(1, $SENHA);
            $stmt->bindValue(2, $CPF);
            $stmt->execute();
        }catch (PDOException $e){
            die("Senha não alterada! ". $e->getMessage());
        }
    }

    public function chamaEmail($EMAIL){
        $sql = "SELECT * FROM USUARIO
                WHERE EMAIL = ?";
        try {
            $stmt = $this->con->prepare($sql);
            $stmt->bindValue(1, $EMAIL);
            $user = $stmt->fetch();
            return $user;
        } catch (PDOException $e) {
            die("Email não encontrado ". $e->getMessage());
        }
    }
}
?>