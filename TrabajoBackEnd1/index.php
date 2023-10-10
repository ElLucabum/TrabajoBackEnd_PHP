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
		  
		  //La operacion de concatenacion servira para optimizar el codigo y usar menos codigo.
		  
		    //echo "El resultado de esta operacion es: " . $numeroUno + $numeroDos . "<br>" . "<br>";
		  
		  // OPERACIONES LOGICAS (valores booleados "true o false")
		  
		 /*
		      $variable1 = true;
		       var_dump($variable1);
		   
	         echo "<br>";
		  
		      //NEGACION (not)
		  
		       $variable2 = !true; //al poner el "!" va a enseñar el valor contrario que seria false y al revez si es false
		        var_dump($variable2);
			
		     echo "<br>";

		      //AND (Y)
		  
		      $variable3 = true && true; // todos deben ser "true" osea estar de acuerdo para dar el resultado true, tambien se puede hacer mas grande pero el resultado es el mismo
		        var_dump($variable3);	

	         echo "<br>";
		  
		      $variable4 = true && true && true && false;
		        var_dump($variable4);
		  
	         echo "<br>";
			 
			 //OR (O)
			 $variable5 = true || true; //Todas las condiciones tienen que ser falsas para que el resultado sea falso
		        var_dump($variable5);			 
			 
        */
  
		 //Estructura de Decision (existen simples y dobles)

 //Consigna 1
		 
		 echo "<center> <h3> Ahora se mostraran Estructuras de decision y ver si se cumplen o no </h3> </center>" . "<br>" . "<br>";
          $N1 = 30;
		  
		echo "<h4> Si el valor es positivo se mostrara a continuacion </h4>" . "</br>";
		 
		  if($N1 > 0) {
			 echo  "El número ingresado es un número positivo";	
			 echo "<br>" . "El numero es: " . $N1;
		  }	  
		  
		echo "<br>" . "<br>" . "arriba se debe mostrar la confirma si se cumple.";
 
 //Consigna 2
 
        $N2 = 8;
		  
		echo "<h4> Si el valor es mayor a 1 y menor a 10 se mostrara a continuacion </h4>" . "</br>";
		 
		  if($N2 > 1 && $N2 < 10) {
			 echo  "El número ingresado es mayor a 1 y menor a 10";	
			 echo "<br>" . "El numero es: " . $N2;
		  }	  
		  
		echo "<br>" . "<br>" . "arriba se debe mostrar la confirma si se cumple.";		 
		 
 //Consigna 3	 
 
         $N3 = 50;
		  
		echo "<h4> Si el valor es mayor o igual a 10 o menor a 2 se mostrara aqui. </h4>" . "</br>";
		 
		  if($N3 > 10 || $N3 == 10 || $N3 < 2) {
			 echo  "El número ingresado es mayor o igual a 10 o menor a 2";	
			 echo "<br>" . "El numero es: " . $N3;
		     }	 
		     else {
				 echo "El número ingresado no pudo ser validado";
			 }
		  
		echo "<br>" . "<br>";	 
		
 //Consigna 4	 
 
         $NUMERO1 = 14;
		 $NUMERO2 = 14;
		  
		echo "<h4> Si el Numero1 e Numero 2 es mayor o menor o iguales entre si se mostraran los calculos. </h4>" . "</br>";
		 

		 
		 //AQUI SE APLICO LA ESTRUCTURA DE DECISION ANIDADA
		 
		 /*    if ($NUMERO1 > $NUMERO2) {
			       echo  "$NUMERO1 + $NUMERO2 = ". $NUMERO1 + $NUMERO2;	
		            echo "<br>";
			         echo  "$NUMERO1 - $NUMERO2 = ". $NUMERO1 - $NUMERO2;

		           }
             else  {
                       if ($NUMERO2 > $NUMERO1) {
			          echo "$NUMERO2 x $NUMERO1 = ". $NUMERO2 * $NUMERO1;
			           echo "<br>";
			            echo "$NUMERO2 / $NUMERO1 = ". $NUMERO2 / $NUMERO1;
			             echo "<br>";				
			              echo "$NUMERO2 % $NUMERO1 = ". $NUMERO2 % $NUMERO1;
				       }
				         else {
						     echo "Los numeros Ingresados son Iguales.";
					     }
		           }
         */
		 
            //Aqui se aplica la estructura de decicion anidada pero con "elseif"
       
	           if ($NUMERO1 > $NUMERO2) {
			            echo  "$NUMERO1 + $NUMERO2 = ". $NUMERO1 + $NUMERO2;	
		                 echo "<br>";
			              echo  "$NUMERO1 - $NUMERO2 = ". $NUMERO1 - $NUMERO2;

		                }
	            elseif ($NUMERO2 > $NUMERO1) {
					 echo "$NUMERO2 x $NUMERO1 = ". $NUMERO2 * $NUMERO1;
			           echo "<br>";
			            echo "$NUMERO2 / $NUMERO1 = ". $NUMERO2 / $NUMERO1;
			             echo "<br>";				
			              echo "$NUMERO2 % $NUMERO1 = ". $NUMERO2 % $NUMERO1;
					
				}
				else {
					 echo "Los numeros Ingresados son Iguales.";
				}
		 
		  
		echo "<br>" . "<br>";	 		
		 
		 //Notas
		 //MAYOR O IGUAL >=
		 //MENOR O IGUAL <=
		 // IGUALDAD ==
		 //DESIGUALDAD !=
		 //IGUALDAD ESTRICTA === (en valor y en tipo de dato)
		 //DESIGUALDAD ESTRICTA !==
		 
		 //NOTA RECORDATORIA DE APRENDER EL SWITCH
		 
		 
		 echo "<center> <h3> A continuacion mostraremos Estructuras de Repeticion. </h3> </center>". "<br>". "<br>";
		 
		 //ESTRUCTURAS DE REPETICION: WHILE
		 
		 $Nume1 = 1;
		 echo "<h4> Mostrar del 1 al 9 </h4>". "<br>"."<br>";
		 
		 while($Nume1 < 10){
			 echo "$Nume1";
			 echo "<br>";
			   $Nume1 = $Nume1 + 1; //Sumale uno a lo que habia en la variable
			   
			   //$Nume++; ($Nume--)
			   //$Nume += 1; ($Nume -= 1) sirve para sumar pares o restar o multiplicar
		 }
		 
		 $Nume2 = 9;
		 echo "<h4> Mostrar del 9 al 1 </h4>". "<br>"."<br>";		 
		 
		 while($Nume2 > 0){
			 echo "$Nume2";
			 echo "<br>";
			   $Nume2 = $Nume2 - 1; 
		 }		 
		 
		 $Nume3 = 1;
		 echo "<h4> Mostrar numeros pares del 1 al 20 </h4>". "<br>"."<br>";		 
		 
		 while($Nume3 < 20){
			 if($Nume3 % 2 == 0){
			   echo "$Nume3". "<br>";
			 }
			   $Nume3 += 1; 
		 }		 
		 		 
		 $Nume4 = 1;
		 echo "<h4> Mostrar numeros impares del 1 al 20 </h4>". "<br>"."<br>";		 
		 
		 while($Nume4 < 20){
			 if($Nume4 % 2 != 0){
			   echo "$Nume4". "<br>";
			 }
			   $Nume4 += 3; 
		 }		 
		 
		 $Nume5 = 1;
		 echo "<h4> Mostrar la suma de los numeros del 1 al 20 </h4>". "<br>"."<br>";		 
		 
		 while($Nume5 < 20){
			 echo "$Nume5";
			 echo "<br>";
			   $Nume5 += 1; 
		 }			 
		 echo "el resultado es: ". $Nume5;
		 
		 $Nume6 = 1;
		 echo "<h4> Mostrar la suma de los numeros pares del 1 al 20 </h4>". "<br>"."<br>";		 
		 
		 while($Nume6 < 20){
			 echo "$Nume6";
			 echo "<br>";
			   $Nume6 += 2; 
		 }			 
		 echo "el resultado es: ". $Nume6;		
		 
		 
		 echo "<h4> a continuacion mostraremos el resultado del factorial del 8. </h4>". "<br>";
		 
         $N = 8;
		 $F = 1;
		 $I = 0;
		 
		 for ($I = $N; $I>0; $I--){
			 $F = $F * $I;
		 }
        echo "el factorial de $N es: ". "$F";

			


		
		
		
		

 ?>

 </body>
 
 </html>