<?php

require_once __DIR__."/User/User.php";
require_once __DIR__."/User/User_premium.php";

require_once __DIR__."/Product/Product_base.php";
require_once __DIR__."/Product/Product_elettronico.php";

require_once __DIR__."/Card/Card.php";

$frullatore = new Product_base("Frullatore", "Bosch", "25" , "0001234569");

$mac = new Product_elettronico("MacBook Air", "Apple", "899", "0007895641", "18 ore", 8, "8gb");


$giorgio = new User("Giorgio", "Rossi", "11-07-94", "Via cassia 1400");

if($giorgio->getPremium()){
    echo $giorgio->getNome() . " gode della spedizione gratis ";
} else {
    echo $giorgio->getNome() . " non gode della spedizione gratis ";
}

$c = new Card(5333141055557896, 10, 22, 898);
$giorgio->setCarta($c);

var_dump($giorgio);

$stefano = new User_premium("Stefano", "Bianchi", "07-08-88", "Via tionfale 11400");

if($stefano->getPremium()){
    echo $stefano->getNome() . " gode della spedizione gratis";
} else {
    echo $stefano->getNome() . " non gode della spedizione gratis";
}

$d = new Card(533314104447896, 10, 18, 898);
$stefano->setCarta($d);

var_dump($stefano);

