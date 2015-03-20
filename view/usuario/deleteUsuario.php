<?php
    include_once '../../model/Usuario.php';
    if(isset($_POST['borrar']))
    {
        if(!empty($_POST['nombre'])&& !empty($_POST['apellido']))
        {
            $usuario=new Usuario();
            $verificar=$usuario->verificarUsuario($_POST['nombre'],$_POST['apellido']);
            if($verificar===TRUE)
            {
                $usuario->deleteUsuario($_POST['nombre'],$_POST['apellido']);
            }
            else{
                echo "Usted no esta registrado ";
            }
        }

    }
?>
<html>
  <body>
      <form action ="deleteUsuario.php" method="post">
          <table>
              <tr><h3>Elimine sus Datos</h3></tr>
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
          <input type="hidden" name="borrar">
          <input type="submit" value="Eliminar Usuario">
      </form>
  </body>
</html>