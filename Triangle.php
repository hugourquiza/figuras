<?php

namespace \App\Figures;

use \App\Figures\Figure;
use \App\Figures\Functions;

class Square implements Figure {

    use Functions;
    
    public function __construct($base,$altura) {
        $this->base=$base;
        $this->altura=$altura;
        $this->superficie=$base*($altura/2);
        $this->tipo='triangulo';
    }
  
}
