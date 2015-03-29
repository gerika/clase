<?php $usuario = unserialize($_GET['usuario']); ?>
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
<h2> Editar Usuario</h2>
<form method="POST" action="/clase/controller/ControllerUsuario.php" >
    <table>
        <tr>
            <td>Id:</td>
            <td> <input type="text" name="id" value="<?php echo $usuario['id'];?>" readonly></td>
        </tr>
        <tr>
            <td>Nombres:</td>
            <td> <input type="text" name="txtNombres" value="<?php echo $usuario['nombres'];?>" placeholder="Ingrese sus nombres"></td>
        </tr>
        <tr>
            <td>Apellidos:</td>
            <td> <input type="text" name="txtApellidos" value="<?php echo $usuario['apellidos'];?>" placeholder="Ingrese sus apellidos"></td>
        </tr>
        <tr></tr>
    </table>
    <br>
    <input type="hidden" name="op" value="editSave">
    <input type="submit"  value="Insertar Datos ">
</form>
</body>
</html>