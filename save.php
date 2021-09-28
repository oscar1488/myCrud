<?php

include("db.php");


if(isset($_POST['save'])){
   $nombre=$_POST['nombre'];
   $categoria=$_POST['categoria'];
   $costoProduccion=$_POST['costoProduccion'];
   $precioVenta=$_POST['precioVenta'];
   $descripcion=$_POST['descripcion'];

   /*guardo cada variable en la tabla usuario de mi base de datos */
   $query="INSEERT INTO producto(nombre, categoria, costoProducto, precioVenta, descripcion) VALUES ('$nombre', '$categoria', '$costoProduccion', '$precioVenta', '$descripcion')";
   $result=mysqli_query($sconn, $query);

   $_SESSION['message'] = "Guardado con éxito.";
   header("Location: index.php");              //carga la pagina principal del appCrud



}
?>

