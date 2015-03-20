<?php
require_once '../model/Usuario.php';


$opcion = $_GET['op'];

switch ($opcion) {
    case 'add':
       header("Location:../view/usuario/addUsuario.php");
        break;
    case 'edit':
        header("Location:../view/usuario/editarUsuario.php");
        break;
    case 'delete':
        header("Location:../view/usuario/deleteUsuario.php");
        break;
    case 'listar':
        $modelUsuario = new Usuario();
        $lista = $modelUsuario->getAllUsuarios();
        header("Location: http://localhost/clase/view/usuario/listarUsuario.php?lista=".serialize($lista));
        break;
}