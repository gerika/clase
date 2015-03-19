<table>
    <thead>
        <th>Id</th>
        <th>Nombres</th>
        <th>Apellidos</th>
    </thead>
    <tbody>
    <?php $listar = unserialize($_GET['lista']); ?>
    <?php foreach($listar as $row) { ?>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['nombres'];?></td>
        <td><?php echo $row['apellidos'];?></td>
    <?php } ?>
    </tbody>
</table>