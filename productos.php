<?php

//GENERAR LA BASE DE DATOS
//$conexion = mysqli_connect("Servidor de base de datos", "usuario de base de datos", "contraseña de base de datos", "esquema de base de datos")

$conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");



mysqli_close($conexion);


?>