<?php

class User {
    private $nome;
    private $cognome;
    private $data_nascita;
    private $via;
    private $premium = false;

    public function __construct($_nome, $_cognome, $_data_nascita, $_via)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->data_nascita = $_data_nascita;
        $this->via = $_via;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCognome()
    {
        return $this->cognome;
    }

    public function getDataNascita()
    {
        return $this->data_nascita;
    }

    public function getVia()
    {
        return $this->via;
    }

    public function getPremium()
    {
        return $this->premium;
    }


}