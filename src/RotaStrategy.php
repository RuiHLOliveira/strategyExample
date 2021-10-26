<?php

namespace Strategy;
use Strategy\Ponto;
use Strategy\Rota;

interface RotaStrategy
{
    public function roteia(Ponto $a, Ponto $b) : Rota;
}
