<?php
include 'Name.php';
class NameSub  extends Name{
    public $inicial;
    public function __construct($nombre,$apellido,$inicial)
    {
       parent::  __construct($nombre,$apellido);
        $this->inicial=$inicial;
    }
    public function rename()
    {
        return (parent::rename()." ".$this->inicial);
    }

}
