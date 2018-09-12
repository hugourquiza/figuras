<?php

namespace \App\Figures;

interface Figure
{
    public function get_superficie();
    public function get_base();
    public function get_altura();
    public function get_diametro();
    public function get_tipo();
}