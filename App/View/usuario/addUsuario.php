
<html>

     <head>
         <title></title>
     </head>
    <body>
        <?php if( !empty($_GET['error']) ) :?>
            <?php if( $_GET['error'] == 1 ) :?>
                Los campos son requeridos
            <?php endif;?>
        <?php endif;?>
        <h2>Ingresar Usuario</h2>
        <form method="POST" action="/clase/App/controller/ControllerUsuario.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nombres:</td>
                    <td> <input type="text" name="txtNombres" placeholder="Ingrese sus nombres"></td>
                </tr>
                <tr>
                    <td>Apellidos:</td>
                    <td> <input type="text" name="txtApellidos" placeholder="Ingrese sus apellidos"></td>
                </tr>
                <tr>
                    <td>Imagen:</td>
                    <td> <input type="file" name="fImage" placeholder="Ingrese Imagen"></td>
                </tr>
                <tr></tr>
            </table>
            <br>
            <input type="hidden" name="op" value="addSave">
            <input type="submit"  value="Insertar Datos">
        </form>
    </body>
</html>

