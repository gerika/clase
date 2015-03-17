<?php
namespace figuras;
use figuras\Cuadrado;
use figuras\Triangulo;

 abstract class Adapter
 {
     protected $_numeroLado;
     protected $_valorLado;
     protected $_figuraModel;


     public function init()
     {
        if( $this->_numeroLado ===3 ) {
            $this->_figuraModel = new Triangulo();
        } elseif ( $this->_numeroLado ===4 ) {
            $this->_figuraModel = new Cuadrado();
        }
        return $this->_figuraModel;
     }
}