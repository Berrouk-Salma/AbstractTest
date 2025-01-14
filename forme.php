<?php
abstract class Forme {
    protected $color;
    
    public function __construct($color) {
        $this->color = $color;
    }
    
    abstract public function calculerSurface();
    
    public function getColor() {
        return $this->color;
    }
}