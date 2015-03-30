<?php
namespace App\Model;

class ConectionMsql
{
    protected $_conection;
    private $_host = '127.0.0.1';
    private $_password ='admin';
    private $_user = 'root';
    private $_dataBase = 'crud';

    public function __construct()
    {
        // Create connection
        $this->_conection = new \mysqli($this->_host, $this->_user, $this->_password, $this->_dataBase);
        // Check connection
        if ($this->_conection->connect_error) {
            die("Connection failed: " . $this->_conection->connect_error);
        }
    }

    public function getConection()
    {
        return $this->_conection;
    }

}