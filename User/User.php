<?php

class User {

    private $nome;
    private $cognome;
    private $data_nascita;
    private $via;
    private $dati_carta;
    protected $premium = false;

    public function __construct($_nome, $_cognome, $_data_nascita, $_via, $_dati_carta = [])
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->data_nascita = $_data_nascita;
        $this->via = $_via;
        $this->dati_carta = $_dati_carta;

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

    public function getDatiCarta(){
        return $this->dati_carta;
    }

    public function setCarta($_carta){
        $this->dati_carta[] = $_carta;
    }

    public function getPremium()
    {
        return $this->premium;
    }

    public function ceckCarta()
    {
        if($this->dati_carta[0]->anno_scad < 21){
            throw new Exception("carta scaduta");
        }
    }
}