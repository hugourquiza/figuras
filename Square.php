<?php

namespace \App\Figures;

use \App\Figures\Figure;
use \App\Figures\Functions;

class Square implements Figure {

    use Functions;
    
    public function __construct($base) {
        $this->base=$base;
        $this->superficie=$base*$base;
        $this->tipo='cuadrado';
    }
    

}
