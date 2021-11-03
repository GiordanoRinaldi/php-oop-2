<?php

require_once __DIR__."/User.php";

class User_premium extends User{
    private $premium = true;

    public function __construct($_nome, $_cognome, $_data_nascita, $_via)
    {
        parent::__construct($_nome, $_cognome, $_data_nascita, $_via);
    }

    public function getPremium()
    {
        return $this->premium;
    }
}