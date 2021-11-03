<?php

class Card {
    private $num_carta;
    private $mese_scad;
    private $anno_scad;
    private $cvc;

    public function __construct($_num_carta, $_mese_scad, $_anno_scad, $_cvc)
    {
        $this->num_carta = $_num_carta;
        $this->mese_scad = $_mese_scad;
        $this->anno_scad = $_anno_scad;
        $this->cvc = $_cvc;
    }

    public function getNumCarta()
    {
        return $this->num_carta;
    }

    public function getMeseCarta()
    {
        return $this->mese_scad;
    }

    public function getAnnoCarta()
    {
        return $this->anno_scad;
    }

    public function getCvc()
    {
        return $this->cvc;
    }
}