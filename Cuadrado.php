<?php
namespace figuras;
include_once 'Operaciones.php';

class Cuadrado implements Operaciones
{
    private $lado ;
    private $numero_lados;
    /*
    public function __construct($lado,$numero_lados)
    {
        $this->lado=$lado;
        $this->numero_lados=$numero_lados;
    }
    */
    public function calcular_area($lado)
    {
        $area=pow($lado,2);
        echo "es cuadrado". $area;
    }
    public function calcular_perimetro()
    {
        $p=($this->lado)*4;
        return $p;
    }
}
