<?php

  //EJEMPLOS DE POW

/*
  $variable1 = pow(2, 2) + 3;
   echo $variable1. "<br>";
 
  $variable2 = pow(3, 2) + 3;
   echo $variable2. "<br>";


  
  $nombre = "pepe"; //No es la misma que esta definida en la funcion.

  saludar($nombre); //Este es el llamado a la funcion
  saludar("vacalola");
  saludar("boliviano");
  saludar("wiiiiww");

  $variable3 = pow(4, 2) + 3;
   echo $variable3. "<br>";


  // DEFINICION DE MI FUNCTION
  //Nota: Aqui se define una funcion, y no importa si se pone abajo o encima del codigo de llamado, funciona igual.

  function saludar($nombre) {
	  echo "hola ". $nombre. "<br>";
  }

echo "<br>";

  function modeloSubaDolar($valor) {
	  $resultado = pow($valor, 2) + 4;
	  return $resultado;
  }
  
  $variable4 = modeloSubaDolar(5);
  
  echo $variable4. "<br>";
*/


//---------------------------------------------------------------------------------------------------------------------------------------

//Consigna 1: (a)

echo "<h3> Consigna 1 (a): </h3>". "<br>";

function CalCuadrado($valor) {
	echo "El cuadrado tiene un Perimetro de: ". $valor * 4 . "<br>";
	echo "El cuadrado tiene un Area de: ". $valor * $valor . "<br>";
}

CalCuadrado(6);

//Consigna 1: (b)

echo "<h3> Consigna 1 (b): </h3>". "<br>"; 

function CadenaCaracter1($Cadena) {
	echo "Esta es la cadena normal: ". $Cadena. "<br>";
	echo "Aqui mostrado en minusculas: ". strtolower($Cadena). "<br>";
}



function CadenaCaracter2 ($Cadena) {
	echo "Esta es la cadena normal: ". $Cadena. "<br>";
	echo "Aqui mostrado en mayusculas: ". strtoupper($Cadena). "<br>";	
}

CadenaCaracter1("HOLA");

echo "<br>";

CadenaCaracter2("buenaas");

echo "<br>";

echo "<h3> Consigna 1 (c): </h3>". "<br>";

//Consigna 1: (c)

// GRACIAS JUAN TOSETTI
function  MesesYDias ($Mes) {
	if ($Mes == 2) {
		return "Febrero Tiene entre 28/29.";
	} elseif (in_array($Mes,[4, 6, 9, 11])){
		return "30 dias (Abril, Junio, Septiembre, Noviembre)";
	} elseif (in_array($Mes,[1, 3, 5, 7, 8, 10, 12])) {
		return "31 dias (Enero, Marzo, Mayo, Julio, Agosto, Octubre, Diciembre)";
	} else {
		return "El numero no es Valido.";
	}
}

$VariableResultado = MesesYDias(4);

echo $VariableResultado. "<br>";


/*
   //Pruebas

   $String = "HOLA MUNDO!";

   echo "esta es la cadena original: ". $String. "<br>";

   echo "esta es la cadena con strtolower: ". strtolower($String). "<br>";

   echo "<br>";
   $String2 = "guag guag";

   echo "esta es la cadena original: ". $String2. "<br>";

   echo "esta es la cadena con strtoupper: ". strtoupper($String2). "<br>";
*/




?>