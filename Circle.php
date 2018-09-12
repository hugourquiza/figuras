<?php

namespace \App\Figures;

use \App\Figures\Figure;
use \App\Figures\Functions;


class Square implements Figure {

    use Functions;
    
    public function __construct($radio) {
        $this->diametro=2*$radio;
        $this->superficie=pi()*(radio ** 2);
        $this->tipo='circulo';
    }   

}
