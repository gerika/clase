<?php
include 'Operaciones.php';
class Cuadrado implements Operaciones{
    private $lado ;
    private $numero_lados;
    public function __construct($lado,$numero_lados)
    {
        $this->lado=$lado;
        $this->numero_lados=$numero_lados;
    }
    public function calcular_area()
    {
        $area=pow($this->lado,2);
        return $area;
    }
    public function calcular_perimetro()
    {
        $p=($this->lado)*4;
        return $p;
    }
}
 $c=new Cuadrado(3,4);
 echo $c->calcular_area();
echo $c->calcular_perimetro();