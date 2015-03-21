<?php
   session_start();
   include_once '../../model/Usuario.php';

   $nombre=$_SESSION['nombre'];
   $apellido=$_SESSION['apellido'];
    if(isset($_POST['editar']))
    {
        if(!empty($_POST['nombre2'])&& !empty($_POST['apellido2']))
        {
            $usuario=new Usuario();
            $usuario->editarUsuario($nombre,$apellido,$_POST['nombre2'],$_POST['apellido2']);
            unset($nombre);
            unset($apellido);
        }
        else{
            echo '<script>alert("Usted necesita rellenar todos los campos ");</script>';
        }

    }
?>
<html>
   <body>
   <form action ="editarUsuarioRegistrado.php" method="post">
       <table>
           <tr><h2>Actualizar Datos Usuario</h2></tr>
           <tr>
               <td><p>Nombre:</p></td>
               <td><input type="text" name="nombre2" placeholder="Ingrese nombre"></td>
           </tr>
           <tr></tr>
           <tr>
               <td><p>Apellido:</p></td>
               <td><input type="text" name="apellido2" placeholder="Ingrese Apellido"></td>
           </tr>
       </table>
       <br>
       <input type="hidden" name="editar">
       <input type="submit" value="editar Usuario">
   </form>
   </body>
</html>