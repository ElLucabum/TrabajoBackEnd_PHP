<?php

$conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");

$query = "DELETE FROM productos WHERE id_Producto = ";     
$resultado = mysqli_query($conexion, $query);

if($resultado === true) {
	echo "Se elimino el producto correctamente";
}
else {
	echo "hubo un error, vuelva a intentarlo";
}



mysqli_close($conexion);





?>