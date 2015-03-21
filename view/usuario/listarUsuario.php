<div>
    <a href="/clase/controller/ControllerUsuario.php?op=add">Nuevo</a>
</div>
<br>
<p>
    <?php if( !empty($_GET['result']) ) :?>
        <?php if( $_GET['result'] == 1 ) :?>
            Se modifico la variable con exito
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
        <?php $listar = unserialize($_GET['lista']); ?>
        <?php foreach($listar as $row) { ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['nombres'];?></td>
                <td><?php echo $row['apellidos'];?></td>
                <td><a href="/clase/controller/ControllerUsuario.php?op=edit&id=<?php echo $row['id'];?>">Editar</a></td>
            </tr>
        <?php } ?>
        </tbody>

</table>

