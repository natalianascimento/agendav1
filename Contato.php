<?php 

class Contato{
    private $nome;
    private $telefone;

    public function __construct($nomeA, $telefoneA){
        $this->nome = $nomeA;
        $this->telefone = $telefoneA;
    }
    /*** @return mixed*/
    public function getNome(){
        return $this->nome;
    }

    /*** @return mixed*/
    public function getTelefone(){
        return $this->telefone;
    }

    /*** @param mixed $nome*/
    public function setNome($nome){
        $this->nome = $nome;
    }

    /*** @param mixed $telefone*/
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
}

?>