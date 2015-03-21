<?php
require_once '../model/Usuario.php';


$opcion = $_REQUEST['op'];
switch ($opcion) {
    case 'add':
            header("Location:../view/usuario/addUsuario.php");
        break;
    case 'addSave':
        $modelUsuario = new Usuario();
        $data = $_POST;
        $result = $modelUsuario->addUsuario($data);
        if ($result == true) {
            $modelUsuario = new Usuario();
            $lista = $modelUsuario->getAllUsuarios();
            header("Location: http://localhost/clase/view/usuario/listarUsuario.php?lista=".serialize($lista). "result=1");
        }
        break;
    case 'edit':
        header("Location:../view/usuario/editarUsuario.php");

        break;
    case 'editSave':
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