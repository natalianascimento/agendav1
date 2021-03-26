<?php

class Conexao{
    private $conn;
    public function __construct(){
        $this->conn = new PDO('mysql:host=localhost;dbname=teste', 'root', '');
        try {
            $conn = new PDO('mysql:host=localhost;dbname=teste', 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
  
    public function executa($sql){//inserir
        //$this->conn->beginTransaction();
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        //$this->conn->commit();
        return $this->conn->lastInsertId();
    }
    
    public function consultar($sql){
        $sql = "select * from agenda";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }// AJUSTAR ESSE MÉTODO PARA RECEBER AS INFORMAÇÕES
    
    
//     public function executaprepare($sql,$parametros){
//         $stmt=$this->conn->prepare($sql);
//         $stmt->execute($parametros);
//         // $data=$stmt->fetch(PDO::FETCH_OBJ);
//        
//         return $data;
//     }
    
}

?>