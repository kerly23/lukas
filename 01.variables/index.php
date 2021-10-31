<?php

// dado un array de números, devolver un array con los números pares
$numbrs = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach($numbrs as $valor){
  if ($valor % 2 == 0) {
      echo"el numero ${valor} es par". "<br>";
      
  }else {
      echo"el numeroooo ${valor} no es par"."<br>";
   }
} 

?>