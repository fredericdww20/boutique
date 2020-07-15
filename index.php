<?php

require("Vetements.php");
require("Chaussures.php");
require("Pantalons.php");

$jean = new Pantalons(38, 20, 215 );
$nike = new Chaussures(42, 59, 150 );

var_dump($nike);
var_dump($jean);