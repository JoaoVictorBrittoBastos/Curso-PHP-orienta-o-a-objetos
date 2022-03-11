<?php
class Pessoa{  
    protected $nome;
    const ESPECIE = "Humano(a)";

    public function __construct($tmpNome){
        $this->nome=$tmpNome;
    }

    public function setNome($novoNome){
        $this->nome = $novoNome;
    }
    public function getNome(){
        return $this->nome;
    }
}
//Public: para todos
    //Private: Só pra um arq de dentro
    //Protected: só pra herança 

    /*public $nome;
    public $site;

    public function falarNome(){
        echo $this->nome; 
    }
    public function falarSite(){
        echo $this->site;
    }*/