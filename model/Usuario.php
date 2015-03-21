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
        $sql = "UPDATE usuario SET  nombres='".$data['txtNombres']."',apellidos='".$data['txtApellidos']."' WHERE id='".$data['id']."' ";
        $result = $this->_conection->query($sql);
        return $result;
    }

    public function addUsuario($data)
    {
        $sql = "INSERT INTO usuario (nombres,apellidos) VALUES ('" . $data['txtNombres'] . "','" . $data['txtApellidos'] . "')";
        $result = $this->_conection->query($sql);
        return $result;
    }

    public function deleteUsuario($idUsuario)
    {
        $sql="DELETE FROM usuario WHERE id='".$idUsuario."' ";
        $result = $this->_conection->query($sql);
        return $result;
    }

    public function getUsuario($idUsuario)
    {
        $sql = "Select * from usuario where id=$idUsuario";
        $result = $this->_conection->query($sql);

        $this->_conection->close();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data = $row;
                break;
            }
            //var_dump($data);exit;
            return $data;
        }
        return array();
    }

}
