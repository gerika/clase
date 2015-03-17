<?php
include'Triangulo.php';
include'Cuadrado.php';
include 'Adapter.php';

class Calcular  implements Adapter {
      private $conexion;
    public function setConexion($tipo_figura)
    {
        if($tipo_figura=="Triangulo")
        {
            (object)$this->conexion=new Triangulo(3,3);
           // $this->conexion="triangulo";
        }
        else
        {
            if($tipo_figura=="Cuadrado")
            {
                (object)$this->conexion=new Cuadrado(3,4);

            }
        }
    }
    public function getConexion()
    {
        return (object)$this->conexion;
    }
}
$c=new Calcular();
$c->setConexion("Triangulo");

(object)$n= $c->getConexion();
echo get_class($n);
$n->calcular_area(3);






