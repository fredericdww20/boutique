<?php

class Chaussures extends Vetements
{
    public $pointure;

    public function __construct($pointure, $disponibilité, $prix)
    {
        parent:: __construct($disponibilité, $prix);
        $this->pointure = $pointure;
    }
}