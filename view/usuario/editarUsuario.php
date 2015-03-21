<?php
session_start();
include '../../model/Usuario.php';

if(isset($_POST['verificar']))
{

    if(!empty($_POST['nombre'])&& !empty($_POST['apellido']))
    {
        $usuario=new Usuario();
        $verificar=$usuario->verificarUsuario($_POST['nombre'],$_POST['apellido']);
        if($verificar===TRUE)
        {
            $_SESSION['nombre']=$_POST['nombre'];
            $_SESSION['apellido']=$_POST['apellido'];
            header("Location:editarUsuarioRegistrado.php");
        }else{
            echo '<script>alert("Usted no esta registrado ");</script>';
        }
    }
    else{
        echo '<script>alert("Usted necesita rellenar todos los campos ");</script>';
    }
}

?>

<html>
  <header>
      <title>Editar</title>
  </header>
  <body>
  <form action ="editarUsuario.php" method="post">
      <table>
          <tr><h2>Editar Usuario</h2></tr>
          <tr><h3>verificar Usuario</h3></tr>
          <tr><h3>Ingrese sus Datos</h3></tr>
          <tr>
              <td><p>Nombre:</p></td>
              <td><input type="text" name="nombre" placeholder="Ingrese nombre"></td>
          </tr>
          <tr></tr>
          <tr>
              <td><p>Apellido:</p></td>
              <td><input type="text" name="apellido" placeholder="Ingrese Apellido"></td>
          </tr>
      </table>
      <br>
      <input type="hidden" name="verificar">
      <input type="submit" value="verificar Usuario">
  </form>

  </body>
</html>