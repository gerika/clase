<?php
/**
 * Created by PhpStorm.
 * User: Diomedes
 * Date: 15/03/15
 * Time: 03:14 PM
 */
namespace clase;
use Persona;
 //require_once 'Persona.php';



class Cliente extends Persona
{
    private $codigoCliente;
    private $categoria;

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getCodigoCliente()
    {
        return $this->codigoCliente;
    }

    /**
     * @param mixed $codigoCliente
     */
    public function setCodigoCliente($codigoCliente)
    {
        $this->codigoCliente = $codigoCliente;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }


}

$cliente = new Cliente();
$cliente->setNombre('Diomedes');
$cliente->setCodigoCliente('001');

//echo $cliente->getNombre().' '.$cliente->getCodigoCliente();

//echo $cliente->mostarDatos();