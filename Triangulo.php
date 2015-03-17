
<?php
include 'Operaciones.php';
class Triangulo  implements Operaciones {
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

        $area=$lado*$lado/2;
        echo "es triand". $area;
    }

    public function calcular_perimetro()
    {
        $p=($this->lado)*3;
        return $p;
    }
}

