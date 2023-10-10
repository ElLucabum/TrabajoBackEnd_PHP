<?php
	
if (empty($_GET["NombreUsuario"])) {
	echo "<h4> No se ingreso el nombre de usuario. </h4>";	
}
elseif (empty($_GET["NotaNumerica"])) {
	echo "<h4> No se ingreso la nota.</h4>";
}
elseif (!is_numeric($_GET["NotaNumerica"])) {
	echo "<h4> La nota no es numerica. </h4>";
}
elseif ($_GET["NotaNumerica"] < 0 || $_GET["NotaNumerica"] > 10) {
	echo "<h4> La nota no es un numero entre 0 o 10.";
}
else {


if ($_GET["NotaNumerica"] <= 2) {
	echo "la nota de ". $_GET["NombreUsuario"];	
	echo " es Muy deficiente.";
}
elseif ($_GET["NotaNumerica"] <= 5) {
	echo "la nota de ". $_GET["NombreUsuario"];		
	echo " es Insuficiente.";
}
elseif ($_GET["NotaNumerica"] <=7) {
	echo "la nota de ". $_GET["NombreUsuario"];		
	echo " esta Bien.";
}
elseif ($_GET["NotaNumerica"] <=9) {
	echo "la nota de ". $_GET["NombreUsuario"];		
	echo " es Notable.";
}
elseif ($_GET["NotaNumerica"] ==10) {
	echo "la nota de ". $_GET["NombreUsuario"];	
	echo " es Sobresaliente.";
}

}

?>

