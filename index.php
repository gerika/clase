<?php
require 'vendor/autoload.php';
use App\Model\Usuario;

$a = new Usuario();
$list = $a->getAllUsuarios();
var_dump($list);
