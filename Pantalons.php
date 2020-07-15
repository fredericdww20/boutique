<?php

class Pantalons extends Vetements
{
    public $taille;

    public function __construct($taille, $disponibilité, $prix)
    {
        parent:: __construct($disponibilité, $prix);
        $this->taille = $taille
}