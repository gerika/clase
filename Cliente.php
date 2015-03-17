<?php
//namespace clase\herencia;
use  Persona;

//include 'persona.php';

class Cliente extends Persona
{
     private $codigo_cliente;
     private $categorias;

    public function  __construct()
    {
        $personaModel = new Persona();
    }
    public function getCodigoCliente()
    {
        return $this->codigo_cliente;
    }

    public function setCodigoCliente($codigo_cliente)
    {
        $this->codigo_cliente = $codigo_cliente;
    }

    public function getCategorias()
    {
        return $this->categorias;
    }

    public function setCategorias($categorias)
    {
        $this->categorias = $categorias;
    }
    public function mostrar_datos()
    {
        return $this->nombre;
    }

}
/*
$c=new cliente();
$c->setNombre("giuliana");
$c->setCodigoCliente("1656757");
echo $c->getNombre();
echo $c->nombre;
//echo $c->codigo_cliente;
*/