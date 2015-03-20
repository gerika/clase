<?php
   include_once '../../model/Usuario.php';
    if(isset($_POST['insertar']))
    {
        if(!empty($_POST['nombre'])&& !empty($_POST['apellido']))
        {
            $usuario=new Usuario();
            $usuario->editarUsuario();
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