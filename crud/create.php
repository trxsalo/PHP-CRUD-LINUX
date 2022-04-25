<?php 

include("../complementos/conexion.php");

if (isset($_POST['enviar'])){
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$query = "INSERT INTO estudiantes(nombre,apellido) VALUES('$nombre','$apellido')";

#echo "$nombre  ,  $apellido";

$result=mysqli_query($conn,$query);

if(!$result){
    die("Fallo el envió a la db");
}

$_SESSION['mensaje'] = "Se guarda exitosamente a la DB";
$_SESSION['mensaje_tipo'] = "success";

header("Location: ../index.php");

}

?> 
