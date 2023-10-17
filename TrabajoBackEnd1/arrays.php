<?php

//Hay 2 formas de general arrays
//Y son ARRAYS INDEXADOS

/*
    $array1 = array(); //definiendo un array vacio

    $array2 = []; //la segunda forma es con corchetes "[]" cual esta definiendo lo mismo anteriormente


    //Para ver el contenido de los arrays se realiza el siguiente comando

    print_r($array1); // esto sirve principalmente para testear
    var_dump($array1); // esto tambien sirve para testear pero de mejor manera

    echo "<br>";

    $array3 = ["Perez", "gomes", "churri", "abatakam"];

    var_dump($array3);

    echo "<br>";

    echo $array3[2]; // El primer indice de todo array indexado es el CERO "0"

    echo "<br>". "<br>";
	
	// ARRAYS ASOCIATIVOS
	
	$arrayAsocc = [
	    "PrimerNombre" => "Juanito",
		"SegundoNombre" => "Rodrigez",
		"Localidad" => "Carapachai",
		"Edad" => "32",
	
	];
	
	foreach($arrayAsocc as $clave => $Valor){
	    echo "la clave es: ". $clave . " y el valor es: ". $Valor. "<br>";
	}
	
	echo "<br>";
	var_dump($arrayAsocc);
	echo "<br>";
	echo $arrayAsocc["Localidad"];
*/	
	

//FOREACH => una estructura de repeticion que se utiliza solo para mostrar arrays

/*
    $array4 = ["leche", "papas", "gaseosas", "carne",];

    foreach($array4 as $productos){
	    echo $productos. "<br>";
		
    }
*/



$NumPares = [2, 4 , 6, 8, 10, 12, 14, 16, 18, 20,];

echo "<h3> a continuacion mostraremos numeros pares de un array: </h3>". "<br>";

foreach($NumPares as $Pares){
	echo $Pares. "<br>";
}

echo "<br>";

$Datos = ["Pedro", "Ana", "34", "1"];

echo "<h3> datos de un array mostrados con print_r: </h3>";

print_r ($Datos);

$Datos2 = [
    "Nombre" => "Pedro",
	"Apellido" => "Torres",
	"Direccion" => "Av. Mayo 3703",
	"Telefono" => "1122334455",	
];

echo "<br>";

echo "<h3> Datos del array asociativo: </h3>";

foreach($Datos2 as $Clave2 => $Valor2) {
    echo $Clave2 . ": " . $Valor2 . "<br>";
}

echo "<h3>Intruduccion a Ciudades: </h3>";

$ciudades = ["Madrid", "Barcelona", "Londres", "NewYork", "Los Ángeles", "Chicago",];

foreach ($ciudades as $ValorNum => $localidades) {
	echo "La ciudad con el índice ". $ValorNum . " tiene el nombre de: ". $localidades. "<br>";
}

echo "<br>". "<br>";

$ciudades2 = [
    "MD" => "Madrid",
	"BCL" => "Barcelona" ,
	"LD" => "Londres",
	"NY" => "NewYork",
	"LA" => "LosAngeles",
	"CCG" => "Chicago",
];

foreach ($ciudades2 as $ValorString => $localidades2) {
	echo "El indice de ". $localidades2. " es ". $ValorString. "<br>";		
}


?>