<?php
  include_once '../../model/Usuario.php';
if(isset($_POST['insertar']))
{
    if(!empty($_POST['nombre'])&& !empty($_POST['apellido']))
    {
        $usuario=new Usuario();
        $usuario->addUsuarios($_POST['nombre'],$_POST['apellido']);
    }
    else{
        echo '<script>alert(" Es necesario rellenar todos los campos");</script>';
    }

}
?>
<html>

     <head>
         <title></title>
     </head>
    <body>
        <h2>Ingresar Datos</h2>
        <form method="POST" action="addUsuario.php" >
            <table>
                <tr>
                    <td>Nombre:</td>
                    <td> <input type="text" name="nombre" placeholder="Ingrese su nombre"></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>Apellido:</td>
                    <td> <input type="text" name="apellido" placeholder="Ingrese su apellido"></td>
                </tr>
                <tr></tr>
            </table>
            <br>
            <input type="hidden" name="insertar">
            <input type="submit"  value="Insertar Datos ">
        </form>
    </body>
</html>
