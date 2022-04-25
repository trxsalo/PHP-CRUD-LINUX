<?php
include("../complementos/conexion.php");
$query = "SELECT * FROM estudiantes";
$result_tasks = mysqli_query($conn, $query);    
while($row = mysqli_fetch_assoc($result_tasks)) { ?>
    
    <tr>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['apellido']; ?></td>

        <td>
        <a href="crud/update.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
        <i class="fas fa-marker"></i>
        </a>
        <a href="crud/delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                    <i class="far fa-trash-alt"></i>
        </a>
        </td>
</tr>
<?php } ?>
