<?php
require_once '../model/Usuario.php';


$opcion = $_GET['op'];

switch ($opcion) {
    case 'add':

        break;
    case 'edit':

        break;
    case 'delete':

        break;
    case 'listar':
        $modelUsuario = new Usuario();
        $lista = $modelUsuario->getAllUsuarios();
        header("Location: http://localhost/clase/view/usuario/listarUsuario.php?lista=".serialize($lista));
        break;
}