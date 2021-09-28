<?php 
include("db.php");
$nombre = '';
$categoria = '';
$costoProduccion = '';
$precioVenta = '';
$descripcion = '';

/*realiza una consulta a la base de datos con respecto al id seleccionado*/
if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $query = "SELECT * FROM producto WHERE id=$id";
   $result = mysqli_query($conn, $query);
   if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $nombre = $row ['nombre'];
    $categoria = $row['categoria'];
    $costoProduccion = $row['costoProduccion'];
    $precioVenta = $row['precioVenta'];
    $descripcion = $row['descripcion'];

    }

}

/*Realiza la actualizacion o modificacion del registro en la base de datos*/
if (isset($_POST['update'])){
  $id = $_GET['id'];
  $nombre = $_GET_POST['nombre'];
  $categoria = $_GET_POST['categoria'];
  $costoProduccion = $_GET_POST['costoProduccion'];
  $precioVenta = $_GET_POST['precioVenta'];
  $descripcion = $_GET_POST['descripcion'];

  $query = "UPDATE producto set nombre = '$nombre', categoria = '$categoria', costoProduccion = '$costoProduccion', precioVenta = '$precioVenta', descripcion= '$descripcion' WHERE id=$id";
  mysqli_query($conn, $query);

  $_SESSION['message'] = 'Actualizado Correctamente';
  header('Location : index.php');

}
?>

