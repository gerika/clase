<?php
 include 'Cuadrado.php';
include 'Triangulo.php';
 abstract class Adapter {
     protected $conexion;
     public function getConexion()
     {
         return $this->conexion;
     }
     public function setConexion($tipo_figura)
     {
         if($tipo_figura=="Triangulo")
         {
             $this->conexion=new Triangulo(3,3);

         }
         else
         {
             if($tipo_figura=="Cuadrado")
             {
                 $this->conexion=new Cuadrado(3,4);

             }
         }
     }

}