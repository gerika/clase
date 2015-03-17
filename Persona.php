<?php

class Persona
{

    protected $nombre;
    private $apellido;
    private $sexo;

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }


    /**
     * @param mixed $nombre
     */

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }


    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }


    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }


}

