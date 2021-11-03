<?php

require_once __DIR__."/Product_base.php";

class Product_elettronico extends Product_base {
    private $durata_batteria;
    private $num_processori;
    private $ram;

    public function __construct($_nome, $_produttore, $_prezzo, $_asin, $_durata_batteria, $_num_processori, $_ram)
    {
        parent ::__construct($_nome, $_produttore, $_prezzo, $_asin);
        $this->durata_batteria = $_durata_batteria;
        $this->num_processori = $_num_processori;
        $this->ram = $_ram;
    }

}