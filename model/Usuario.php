<?php

require_once 'ConectionMysql.php';
//include_once '../view/usuario/addUsuario.php';
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
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
        return array();
        $this->_conection->close();
    }

    public function editarUsuario($nombre1,$apellido1,$nombre2,$apellido2)
    {
        $sql_ = "UPDATE usuario SET  nombres='".$nombre2."',apellidos='".$apellido2."' WHERE nombres='".$nombre1."' AND apellidos='".$apellido1."'";
        $this->_conection->query($sql_);
        header("Location:http://localhost/clase/controller/ControllerUsuario.php?op=listar");
    }
    public function addUsuarios($nombre,$apellido)
    {

        $sql_ = "INSERT INTO usuario (nombres,apellidos) VALUES ('" . $nombre . "','" . $apellido . "')";
        $this->_conection->query($sql_);
        header("Location:http://localhost/clase/controller/ControllerUsuario.php?op=listar");
    }
    public function verificarUsuario($nombre,$apellido)
    {
        $sql = "SELECT * FROM usuario WHERE nombres='" . $nombre . "' AND apellidos='" . $apellido . "'";
        $result = $this->_conection->query($sql);
        if ($result->num_rows > 0) {
           return TRUE;
        } else {
            return FALSE;

        }
    }
    public function deleteUsuario($nombre,$apellido)
    {
        $sql="DELETE FROM usuario WHERE nombres='".$nombre."' AND apellidos='".$apellido."'";
        $this->_conection->query($sql);
        header("Location:http://localhost/clase/controller/ControllerUsuario.php?op=listar");
    }
}
