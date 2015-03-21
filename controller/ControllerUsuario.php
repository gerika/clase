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
        $modelUsuario = new Usuario();
        $usuario = $modelUsuario->getUsuario($_GET['id']);
        header("Location:../view/usuario/editUsuario.php?usuario=".serialize($usuario));
        break;
    case 'editSave':
        $modelUsuario = new Usuario();
        $data = $_POST;
        $result = $modelUsuario->editUsuario($data);
        if ($result == true) {
            $modelUsuario = new Usuario();
            $lista = $modelUsuario->getAllUsuarios();
            header("Location: http://localhost/clase/view/usuario/listarUsuario.php?lista=".serialize($lista). "&result=1");
        }
        break;
    case 'delete':
        $modelUsuario = new Usuario();
        $idUsuario = $_GET['id'];
        $result = $modelUsuario->deleteUsuario($idUsuario);
        if ($result == true) {
            $modelUsuario = new Usuario();
            $lista = $modelUsuario->getAllUsuarios();
            header("Location: http://localhost/clase/view/usuario/listarUsuario.php?lista=".serialize($lista). "&result=1");
        }
        break;
    case 'listar':
        $modelUsuario = new Usuario();
        $lista = $modelUsuario->getAllUsuarios();
        header("Location: http://localhost/clase/view/usuario/listarUsuario.php?lista=".serialize($lista));
        break;
}