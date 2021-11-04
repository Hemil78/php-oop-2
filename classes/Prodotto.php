<?php
class Prodotto {
    protected $nome;
    protected $marca;
    protected $prezzo;

    function __construct($_nome, $_marca, $_prezzo) 
    {
        $this->nome = $_nome;
        $this->marca = $_marca;
        $this->prezzo = $_prezzo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }


    
}