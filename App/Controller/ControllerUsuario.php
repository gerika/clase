<?php
namespace App\Controller;
require '../../vendor/autoload.php';

use App\Model\Usuario;
use Library\View\Template;
use Library\Pdf\Pdf;

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
                header("Location:http://localhost/clase/App/controller/ControllerUsuario.php?op=list&result=1");
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
               header("Location:http://localhost/clase/App/controller/ControllerUsuario.php?op=list&result=1");
            }
        } else {
            header("Location:http://localhost/clase/App/controller/ControllerUsuario.php?op=edit&id=".$data['id']);
        }

        break;
    case 'delete':
        $modelUsuario = new Usuario();
        $idUsuario = $_GET['id'];
        $result = $modelUsuario->deleteUsuario($idUsuario);
        if ($result == true) {
            header("Location:http://localhost/clase/App/controller/ControllerUsuario.php?op=list&result=1");
        }
        break;
    case 'list':
        $modelUsuario = new Usuario();
        $list = $modelUsuario->getAllUsuarios();

        if ( isset($_GET['result']) ) {
           header("Location: http://localhost/clase/App/View/usuario/listUsuario.php?result=1&list=" . serialize($list));
        } else {
            header("Location: http://localhost/clase/App/View/usuario/listUsuario.php?list=" .serialize($list));
        }
        break;
    case 'pdf' :
        $modelUsuario = new Usuario();
        $list = $modelUsuario->getAllUsuarios();

        $data = array('list' => serialize($list));
        $html = Template::render($data, 'listUsuarios.php');
        Pdf::create($html, 'listado');

        break;
}