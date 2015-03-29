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
        try {
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

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function editUsuario($data)
    {
        try {
            $sql = "UPDATE usuario SET  nombres='".$data['txtNombres']."',apellidos='".$data['txtApellidos']."' WHERE id='".$data['id']."' ";
            $result = $this->_conection->query($sql);
            return $result;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function addUsuario($data)
    {
        try {
            $sql = "INSERT INTO usuario (nombres,apellidos) VALUES ('" . $data['txtNombres'] . "','" . $data['txtApellidos'] . "')";
            $result = $this->_conection->query($sql);
            return $result;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function deleteUsuario($idUsuario)
    {
        try {
            $sql="DELETE FROM usuario WHERE id='".$idUsuario."' ";
            $result = $this->_conection->query($sql);
            return $result;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getUsuario($idUsuario)
    {
        try {
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

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function validInputs($inputs)
    {
        if( isset($inputs['txtNombres']) && isset($inputs['txtApellidos'])) {
            $inputs['txtNombres'] = trim($inputs['txtNombres']);
            $inputs['txtApellidos'] = trim($inputs['txtApellidos']);

        } else {
            return false;
        }

        if ( empty($inputs['txtNombres']) || empty($inputs['txtApellidos']) ) {
            return false;
        }

        return true;
    }

}
