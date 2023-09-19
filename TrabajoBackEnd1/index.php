<html lang="en">
<head>
	  <title>Trabajo PhP BackEnd </title>
</head>

<body>
 
<?php
      //esto es una variable de presentacion STRING
	 $presentacion ="hola mundo!!";
	   echo "<center> <h1> $presentacion </h1> </center>";
		 echo"<br>";
	   echo "<center>trabajo de BackEnd </center>";
	     echo "<br>";
	   
	   /* esto es prueba de la clase
	   
	        //aqui esta el primer variable
	        $variable = 5; // el "=" es una operacion de ASIGNACION
	   
	          echo " <center> $variable </center>"; //aqui se muestra el contenido de la variable
	   
               echo "<br>";
		 
		    //aqui abajo se muestra la estructura del variable
		   
              var_dump($variable);
	           $variable = "bruhwhatthehellbru";
	            var_dump($variable);
	   */
	    
    //Operaciones aritmeticas
	  $numeroUno = 5;
	  $numeroDos = 10;
	
	  echo "<center> <h3> A continuacion vamos a mostrar operaciones Matematicas o Arimeticas </h3> </center>";
	    echo "<br>";
	// SUMA	
	  echo "aqui se mostrara el resultado de 5 + 10 por la maquina:  ";
	  
	    echo $numeroUno + $numeroDos;
	     echo "<br>";
          echo "<br>";
		  
    // RESTA
	  echo "ahora se va a mostrar el resultado de 5 - 10:  ";
	  
	    echo $numeroUno - $numeroDos;
         echo "<br>";
          echo "<br>";
		  
	// MULTIPLICACION
      echo "ahora el resultado de 5 x 10:  ";
	  
	    echo $numeroUno * $numeroDos;
		 echo "<br>";
		  echo "<br>";
	  
	// DIVISION  
	  echo "el resultado de 10 dividido 5:  ";
	  
	    echo $numeroDos / $numeroUno;
		 echo "<br>";
	      echo "<br>";
	  
	// restore_error_handler
	  echo "y ahora se mostrara el resto de la division del 10 dividido 5:  ";
	   
	    echo $numeroDos % $numeroUno;
		 echo "<br>";
		  echo "<br>";
	
    //esto de aqui es un chiste 	
	  echo "Whats nine plus teen?:  21";
	    
		echo "<br>";
		 echo "<br>";
        
	  echo "You stupid.";
	  
	    echo "<br>";
		 echo "<br>";
	  
	  echo "<center> <h3> ahora vamos a transformar grados Celcius a Fahrenheit </h3> </center>";
	  
	    echo "<br>";
		 echo "<br>";
		 
	//convertir Grados celsius a fahrenheit
	//este codigo lo vi en un tutorial: https://www.youtube.com/watch?v=YNrBCIcvzUo
	
      function convertirCelsiusFahrenheit($tipo, $grados) {
		       if ($tipo == 'celsius') {
				   return ($grados - 32) / 1.8;
			   }  else if($tipo == 'fahrenheit') {
				   return $grados * 9 /5 + 32;
			   }
		  
	  }	
	  
	$grados =20;
	$celsius = convertirCelsiusFahrenheit('celsius', $grados);		 
	$fahrenheit = convertirCelsiusFahrenheit('fahrenheit', $grados);	
		 
		 echo 'Los 20 Grados Celsius a Fahrenheit son: ' . $fahrenheit;
		   //echo 'Los Grados Fahrenheit a Celsius son: ' . $celsius;
		   
		   echo "<br>";
		    echo "<br>";
		 
    //Calculo del perimetro y area de un rectangulo
	  
	    echo "<center><h3>Ahora se va a calcular el perimetro y area de un rectangulo e circulo </h3></center>";
		$base = 18;
		$altura = 12;
		
	     echo "<br>";
		  echo "<br>";
		 		 
		 echo "El resultado del Perimetro de un rectangulo con una base de 18cm y altura de 12cm es: ";
		 
		   echo $base + $altura + $altura + $base;
		   
		   echo "<br>";
		    echo "<br>";		   
		 
	    echo "El resultado del area de un rectangulo con una base de 18cm y altura de 12cm es: ";
		 
		   echo $base * $altura;
		   
	     echo "<br>";
		  echo "<br>";
		 
		 echo "El resultado del perimetro de un circulo con radio de 30cm es: ";
		$radio = 30;
        $Pi = 3.14;
		//$diametro = ($radio + $radio);
		 
		  echo $Pi * ($radio + $radio);
		  
	     echo "<br>";
		  echo "<br>";
		 
		 echo "El resultado del perimetro de un circulo con radio de 30cm es: ";
		 
		  echo $Pi * ($radio * $radio);
		 
	     echo "<br>";
		  echo "<br>";		 
		 
		 
		 
		 
		 
 ?>
 </body>
 
 </html>