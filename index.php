<?php

require 'vendor/autoload.php';

use Strategy\Ponto;
use Strategy\RotaAPe;
use Strategy\RotaDeCarro;
use Strategy\CalculadorDeRota;

$calculadorDeRota = new CalculadorDeRota();
$calculadorDeRota->setRota(new RotaAPe()); //RotaStrategy

$a = new Ponto(-47,56);
$b = new Ponto(-60,89);
$rota = $calculadorDeRota->calculaRota($a,$b);
echo $rota->texto;

$calculadorDeRota->setRota(new RotaDeCarro()); //RotaStrategy
$rota = $calculadorDeRota->calculaRota($a,$b);

echo $rota->texto;