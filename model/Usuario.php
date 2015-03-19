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
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
        return array();

    }
}