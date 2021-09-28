<?php

session_start(); //Iniciar los datos de la sesión

$conn = mysqli_connect( //Abre nueva
     'localhost', //Nombre del servidor
     'root',      //Nombre de usuario
     '',          //C de conexión
     'formulario' //Nombre de la base de datos
);
?>