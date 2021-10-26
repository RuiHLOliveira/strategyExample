<?php

namespace Strategy;

use Strategy\Rota;
use Strategy\Ponto;

class RotaAPe implements RotaStrategy
{
    public function roteia(Ponto $a, Ponto $b) : Rota {
        $rota = new Rota();
        $rota->texto = "va se fude filho da p";
        return $rota;
    }
}
