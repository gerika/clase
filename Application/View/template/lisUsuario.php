<?php $listar = unserialize($list); ?>
<div>

</div>
<br>
<p>
   <h1>listado de usuario</h1>
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

            </td>
        </tr>
    <?php } ?>
    </tbody>

</table>