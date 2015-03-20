<?php

require_once 'ConectionMysql.php';
//include_once '../view/usuario/addUsuario.php';
class Usuario  extends  ConectionMsql
{
    protected $_conection;
    private $nombre;
    private $apellido;

    public function __construct()
    {
        parent::__construct();
        $this->_conection = $this->getConection();
        $this->nombre = $_POST['nombre'];
        $this->apellido = $_POST['apellido'];
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

    public function editarUsuarios()
    {
        $sql_ = "UPDATE usuario SET  nombres,apellidos) VALUES ('" . $this->nombre . "','" . $this->apellido . "')";
        $this->_conection->query($sql_);
        header("Location:http://localhost/clase/controller/ControllerUsuario.php?op=listar");
    }
    public function addUsuarios()
    {

        $sql_ = "INSERT INTO usuario (nombres,apellidos) VALUES ('" . $this->nombre . "','" . $this->apellido . "')";
        $this->_conection->query($sql_);
        header("Location:http://localhost/clase/controller/ControllerUsuario.php?op=listar");
    }
    public function verificarUsuario()
    {

        $sql = "SELECT * FROM usuario WHERE nombres='" . $this->nombre . "' AND apellidos='" . $this->apellido . "'";
        $result = $this->_conection->query($sql);
        if ($result->num_rows > 0) {
           return TRUE;
        } else {
            return FALSE;

        }
    }
}
