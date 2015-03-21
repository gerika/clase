<?php

require_once 'ConectionMysql.php';

class Usuario  extends  ConectionMsql
{
    protected $_conection;

    public function __construct()
    {
        parent::__construct();
        $this->_conection = $this->getConection();

    }

    public function getAllUsuarios()
    {
        $sql = "Select * from usuario";
        $result = $this->_conection->query($sql);

        $this->_conection->close();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
        return array();
    }

    public function editUsuario($data)
    {
        $sql = "UPDATE usuario SET  nombres='".$nombre2."',apellidos='".$apellido2."' WHERE nombres='".$nombre1."' AND apellidos='".$apellido1."'";
        $this->_conection->query($sql);

    }

    public function addUsuario($data)
    {
        $sql = "INSERT INTO usuario (nombres,apellidos) VALUES ('" . $data['txtNombres'] . "','" . $data['txtApellidos'] . "')";
        $result = $this->_conection->query($sql);
        return $result;
    }

    public function deleteUsuario($nombre,$apellido)
    {
        $sql="DELETE FROM usuario WHERE nombres='".$nombre."' AND apellidos='".$apellido."'";
        $this->_conection->query($sql);

    }


}
