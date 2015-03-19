<?php


class Name {
    public $nombre;
    public $apellido;

    public function __construct($nombre,$apellido)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
    }

    public function rename()
    {
        return ($this->nombre." ".$this->apellido);
    }
}