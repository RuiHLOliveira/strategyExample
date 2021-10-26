<?php

namespace Strategy;

use Strategy\Rota;
use Strategy\Ponto;

class RotaDeCarro implements RotaStrategy
{
    public function roteia(Ponto $a, Ponto $b) : Rota {
        $rota = new Rota();
        $rota->texto = "Vamos ir de carro! Do ponto $a ao ponto $b";
        return $rota;
    }
}
