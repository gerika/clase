<?php
include '../../model/Usuario.php';
if(isset($_POST['verificar']))
{
    if(!empty($_POST['nombre'])&& !empty($_POST['apellido']))
    {
        $usuario=new Usuario();
        $verificar=$usuario->verificarUsuario();
        if($verificar===TRUE)
        {
            header("Location:editarUsuarioRegistrado.php");
        }
        else{
            echo "Usted no esta registrado ";
        }
    }
}

?>

<html>
  <header>
      <title>Editar</title>
  </header>
  <body>
  <form action ="editUsuario.php" method="post">
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