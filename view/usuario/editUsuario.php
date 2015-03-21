<html>

<head>
    <title></title>
</head>
<body>
<h2>Ingresar Datos</h2>
<form method="POST" action="/clase/controller/ControllerUsuario.php" >
    <table>
        <tr>
            <td>Nombres:</td>
            <td> <input type="text" name="txtNombres" placeholder="Ingrese sus nombres"></td>
        </tr>
        <tr></tr>
        <tr>
            <td>Apellidos:</td>
            <td> <input type="text" name="txtApellidos" placeholder="Ingrese sus apellidos"></td>
        </tr>
        <tr></tr>
    </table>
    <br>
    <input type="hidden" name="op" value="addSave">
    <input type="submit"  value="Insertar Datos ">
</form>
</body>
</html>