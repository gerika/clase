<?php

include 'Persona.php';


class Cliente extends Persona
{
     private $codigo_cliente;


    public function  __construct($nombre,$apellido,$codigo_cliente)
    {
       parent::__construct($nombre,$apellido);
        $this->codigo_cliente=$codigo_cliente;
    }

    public function getCodigoCliente()
    {
        return $this->codigo_cliente;
    }

    public function setCodigoCliente($codigo_cliente)
    {
        $this->codigo_cliente = $codigo_cliente;
    }

}

$c=new cliente("giuliana","pablo",123);

echo $c->getNombre()."<br>";
echo $c->getCodigoCliente();


