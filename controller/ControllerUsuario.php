<?php
require_once '../model/Usuario.php';

$opcion = $_REQUEST['op'];
switch ($opcion) {
    case 'add':
            header("Location:../view/usuario/addUsuario.php");
        break;
    case 'addSave':
        $result = false;
        $modelUsuario = new Usuario();
        $data = $_POST;

        if( $modelUsuario->validInputs($data) ) {
            $result = $modelUsuario->addUsuario($data);
            if ($result == true) {
                header("Location:http://localhost/clase/controller/ControllerUsuario.php?op=listar&result=1");
            }
        } else {
            header("Location:../view/usuario/addUsuario.php?error=1");
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
        //var_dump($modelUsuario->validInputs($data));exit;
        if( $modelUsuario->validInputs($data) ) {
            $result = $modelUsuario->editUsuario($data);
            if ($result == true) {
               header("Location:http://localhost/clase/controller/ControllerUsuario.php?op=listar&result=1");
            }
        } else {
            header("Location:http://localhost/clase/controller/ControllerUsuario.php?op=edit&id=".$data['id']);
        }

        break;
    case 'delete':
        $modelUsuario = new Usuario();
        $idUsuario = $_GET['id'];
        $result = $modelUsuario->deleteUsuario($idUsuario);
        if ($result == true) {
            header("Location:http://localhost/clase/controller/ControllerUsuario.php?op=listar&result=1");
        }
        break;
    case 'listar':
        $modelUsuario = new Usuario();
        $lista = $modelUsuario->getAllUsuarios();

        if ( isset($_GET['result']) ) {
           header("Location: http://localhost/clase/view/usuario/listarUsuario.php?result=1&lista=" . serialize($lista));
        } else {
            header("Location: http://localhost/clase/view/usuario/listarUsuario.php?lista=" .serialize($lista));
        }

        break;
}