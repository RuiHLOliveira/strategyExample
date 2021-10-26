<?php

namespace Strategy;

use Strategy\Rota;
use Strategy\Ponto;
use Strategy\RotaStrategy;

class CalculadorDeRota
{
    private RotaStrategy $rota;

    public function setRota(RotaStrategy $rota)
    {
        $this->rota = $rota;
    }

    public function calculaRota(Ponto $a, Ponto $b) : Rota
    {
        $retorno = $this->rota->roteia($a,$b);        
        return $retorno;
    }
        
}
