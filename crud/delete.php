<?php include("../complementos/conexion.php");
        include("../crud/read.php");


    if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM estudiantes WHERE id in ($id)";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("La incercción fallo.");
    }

    $_SESSION['mensaje'] = 'Se elimino de la lista un Estudiante';
    $_SESSION['mensaje_tipo'] = 'danger';
    header('Location: ../index.php');
    }

?>