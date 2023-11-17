

<table style="border: solid 2px black;">

  <tr>

    <td> Nombre Del Producto </td>
    <td> Descripcion Del Producto </td>	
	<td> Acciones</td>
  </tr>

<?php

  $conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");

    $resultado = mysqli_query($conexion, "SELECT * FROM productos WHERE 1");

    while($UnaFila = mysqli_fetch_assoc($resultado)) {
	    echo "<tr>";
		    echo "<td>".$UnaFila["Nombre_Producto"]."</td>";
			echo "<td>".$UnaFila["Descripcion_Producto"]."</td>";
			echo "<td><a href='./Eliminar_Producto.php?id=".$UnaFila["id_Producto"]."'>Eliminar</a></td>";
		echo "</tr>";
			
	}
	
?>

  
</table>

<?php

/*

//GENERAR LA BASE DE DATOS
//$conexion = mysqli_connect("Servidor de base de datos", "usuario de base de datos", "contraseña de base de datos", "esquema de base de datos")

$conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");

//$resultado = mysqli_query("conexion", "query");

    $resultado = mysqli_query($conexion, "SELECT * FROM productos WHERE 1");

    while($UnaFila = mysqli_fetch_assoc($resultado)) {
		echo "<br>";
		echo $UnaFila["Nombre_Producto"]. "<br>";
		echo $UnaFila["Descripcion_Producto"]. "<br>";
		
	}

mysqli_close($conexion);

*/

/*
$conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");

$query = "INSERT INTO productos (Nombre_Producto, Descripcion_Producto, Precio_Producto, Marca_Producto) VALUES ('Producto 4', 'Descripcion producto 4', '800', 'Maxtonferreo')";     
$resultado = mysqli_query($conexion, $query);

if($resultado === true) {
	echo "se cargo el producto correctamente";
}
else {
	echo "error. no se cargo el producto";
}



mysqli_close($conexion);
*/



?>