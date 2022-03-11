<?php

class Programador extends Pessoa{
    public $linguagem;
    public function __construct($tmpNome, $tmpLinguagem){
        $this->nome = $tmpNome;
        $this->linguagem = $tmpLinguagem;
        echo "<br>O objeto ".__CLASS__." foi instanciado<br>";
    }
} 