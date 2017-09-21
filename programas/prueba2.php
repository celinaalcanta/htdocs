<table border="1" cellspacing="0">
	<?php
      $dias=1;
      $numero=1;
      for ($fila=1; $fila <=7; $fila++)
       { 
      	echo "<tr>";
      	  for ($columna=1; $columna <=7 ; $columna++)
      	   { 
      	  	 switch ($dias) {
      	  	 	case '1':
      	  	 		echo "<td>lunes</td>";
      	  	 		break;
      	  	    case '2':
      	  	    	echo "<td>martes</td>";
      	  	    	break;
      	  	    case '3':
      	  	    	echo "<td>miercoles</td>";
      	  	    	break;
      	  	    case '4':
      	  	    	echo "<td>jueves</td>";
      	  	    	break;
      	  	    case '5':
      	  	    	echo "<td>viernes</td>";
      	  	    	break;
      	  	    case '6':
      	  	    	echo "<td>sabado</td>";
      	  	    	break;
      	  	    case '7':
      	  	    	echo "<td>domingo</td>";
      	  	    	break;
      	  	 	
      	  	 }
      	  	 $dias++;
      	  	 
      	  }
      	  echo "</tr>";
      	  echo "<tr>";
      	   for ($columna=1; $columna <=7 ; $columna++)
      	   {
      	  echo "<td>".$numero;
       	 	echo "</td>";
       	 	$numero++;
            }
      	echo "</tr>";
      }
	?>
</table>