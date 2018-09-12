<?php

namespace \App\Figures;

trait Functions {
    
    protected $superficie=null;
    protected $base=null;
    protected $altura=null;
    protected $diametro=null;
    protected $tipo=null;
                
    public function get_superficie() {
        return $this->superficie;
    }
    
    public function get_base() {
        return $this->base;
    }
    
    public function get_altura() {
        return $this->altura;
    }
    
    public function get_diametro() {
        return $this->diametro;
    }
    public function get_tipo() {
        return $this->tipo;
    }    
}
