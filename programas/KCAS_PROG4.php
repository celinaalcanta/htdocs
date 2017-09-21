<link rel="stylesheet" type="text/css" href="estilos4.css">
<table border="1" cellspacing="0">
	<?php
      $dias=1;
      $numero=1;
      for ($fila=1; $fila <=6; $fila++)
       { 
      	echo "<tr>";
      	 
      	  for ($columna=1; $columna <=7 ; $columna++)
      	   { 
      	  	 switch ($dias) {
      	  	 	case '1':
      	  	 		echo "<th>Domingo</th> ";
      	  	 		break;
      	  	    case '2':
      	  	    	echo "<th>Lunes</th>";
      	  	    	break;
      	  	    case '3':
      	  	    	echo "<th>Martes</th>";
      	  	    	break;
      	  	    case '4':
      	  	    	echo "<th>Miercoles</th>";
      	  	    	break;
      	  	    case '5':
      	  	    	echo "<th>Jueves</th>";
      	  	    	break;
      	  	    case '6':
      	  	    	echo "<th>Viernes</th>";
      	  	    	break;
      	  	    case '7':
      	  	    	echo "<th>Sabado</th>";
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