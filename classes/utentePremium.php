<?php
require_once __DIR__ . "/utente.php";

class utentePremium extends Utente{
    protected $sconti;

    public function __construct($_nome, $_cognome, $_email, $_dataDiNascita)
    {
        parent::__construct($_nome, $_cognome, $_email, $_dataDiNascita);

        if(strtotime($this->dataDiNascita) <= strtotime('now -18 year')) {
            $this->sconti = 20;
        }
    }
    
    
}