<?php

class Pantalons extends Vetements
{
    public $pantalons;

    public function __construct($taille, $pantalons, $disponibilité, $prix)
    {
        parent:: __construct($taille, $disponibilité, $prix);
        $this->pantalons = $pantalons
    }
}