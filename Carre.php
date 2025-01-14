<?php
require_once 'Forme.php';

class Carre extends Forme {
    private $cote;
    
    public function __construct($color, $cote) {
        parent::__construct($color);
        $this->cote = $cote;
    }
    
    public function calculerSurface() {
        return $this->cote * $this->cote;
    }
}