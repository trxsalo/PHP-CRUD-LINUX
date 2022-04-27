<?php 
    include("../complementos/conexion.php");

    $nombre = '';
    $apellido= '';

    if  (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM estudiantes WHERE id=$id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
        }
    }

    if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombre= $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $query = "UPDATE estudiantes set nombre = '$nombre', apellido= '$apellido' WHERE id=$id";
    mysqli_query($conn, $query);
    $_SESSION['mensaje'] = 'Estudiantes se actualizo';
    $_SESSION['mensaje_tipo'] = 'warning';
    header('Location: ../index.php');
    }

?>

<?php 

include('../complementos/conexion.php'); 
include("../complementos/header.php");
?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="../crud/update.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>"
                            placeholder="Update Nombre">
                    </div>
                    <div class="form-group">
                        <input name="apellido" type="text" class="form-control" value="<?php echo $apellido; ?>"
                            placeholder="Update Apellido">
                    </div>
                    <button class="btn-success" name="update">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('../complementos/footer.php'); ?>
