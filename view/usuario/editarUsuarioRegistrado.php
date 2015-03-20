<?php
   include_once '../../model/Usuario.php';

    if(isset($_POST['insertar']))
    {
        if(!empty($_POST['nombre1'])&& !empty($_POST['apellido1']))
        {
            $usuario=new Usuario();
            $usuario->editarUsuario($_POST['nombre1'],$_POST['apellido1']);
        }
        else{
            echo " Es necesario rellenar todos los campos";
        }

    }
?>
<html>
   <body>
   <form action ="editUsuarioRegistrado.php" method="post">
       <table>
           <tr><h2>Actualizar Usuario</h2></tr>
           <tr>
               <td><p>Nombre:</p></td>
               <td><input type="text" name="nombre1" placeholder="Ingrese nombre"></td>
           </tr>
           <tr></tr>
           <tr>
               <td><p>Apellido:</p></td>
               <td><input type="text" name="apellido1" placeholder="Ingrese Apellido"></td>
           </tr>
       </table>
       <br>
       <input type="hidden" name="verificar">
       <input type="submit" value="verificar Usuario">
   </form>
   </body>
</html>