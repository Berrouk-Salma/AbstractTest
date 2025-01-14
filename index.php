<?php
require_once 'forme.php';
require_once 'Carre.php';

$carre = new Carre("rouge", 5);
echo "Couleur: " . $carre->getColor() . "\n";
echo "Surface: " . $carre->calculerSurface() . "\n";