<?php
class Utente {
    protected $nome;
    protected $cognome;
    protected $email;
    protected $dataDiNascita;

    function __construct($_nome, $_cognome, $_email, $_dataDiNascita) 
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_email;
        $this->dataDiNascita = $_dataDiNascita;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCognome() {
        return $this->cognome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDataDiNAscita() {
        return $this->dataDiNascita;
    }
    
}
