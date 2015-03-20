
<table>
        <tr>
            <th>Id</th>
            <th>Nombres</th>
            <th>Apellidos</th>
        </tr>
        <tbody>
        <?php $listar = unserialize($_GET['lista']); ?>
        <?php foreach($listar as $row) { ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['nombres'];?></td>
                <td><?php echo $row['apellidos'];?></td>
            </tr>
        <?php } ?>
        </tbody>

</table>

