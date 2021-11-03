<?php

class Product_base {
    private $nome;
    private $produttore;
    private $prezzo;
    private $asin; //Amazon Standars Identification Number (codice univoco per ogni prodotto)

    public function __construct($_nome, $_produttore, $_prezzo, $_asin)
    {
        $this->nome = $_nome;
        $this->produttore = $_produttore;
        $this->prezzo = $_prezzo;
        $this->asin = $_asin;    
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getProduttore()
    {
        return $this->produttore;
    }

    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function getAsin()
    {
        return $this->asin;
    }
}