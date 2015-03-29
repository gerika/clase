<?php $listar = unserialize($_GET['lista']); ?>
<div>
    <a href="/clase/controller/ControllerUsuario.php?op=add">Nuevo</a><br>
    <a href="/clase/controller/ControllerUsuario.php?op=pdf">Descargar PDF</a>
</div>
<br>
<p>
    <?php if( !empty($_GET['result']) ) :?>
        <?php if( $_GET['result'] == 1 ) :?>
            Se modifico el registro con exito
        <?php endif;?>
    <?php endif;?>
</p>
<table>
        <tr>
            <th>Id</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Opcion</th>
        </tr>
        <tbody>

        <?php foreach($listar as $row) { ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['nombres'];?></td>
                <td><?php echo $row['apellidos'];?></td>
                <td>
                    <a href="/clase/controller/ControllerUsuario.php?op=edit&id=<?php echo $row['id'];?>">Editar</a>
                    <a href="/clase/controller/ControllerUsuario.php?op=delete&id=<?php echo $row['id'];?>">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>

</table>

