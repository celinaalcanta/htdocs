<?php
   $Cfilas=7;
   $Ccolumnas=7;
   echo "<table border=1>";
   for ($fila=0; $fila <$Cfilas ; $fila++) 
   { 
   	switch ($fila) {
   	  	 	case '1':
   	  	 		 echo "<tr> 1 </tr>";
   	  	 		break;
   	  	    case '2':
   	  	    	echo "<tr> 1</tr>";
   	  	    	break;
   	  	    case '3':
   	  	    	echo "<tr> 1 </tr>";
   	  	    	break;
   	  	    case '4':
   	  	    	echo "<tr> 1 </tr>";
   	  	    	break;
   	  	 	case '5':
   	  	 		echo "<tr> 1</tr>";
   	  	 		break;
   	  	 	case '6':
   	  	 		echo "<tr> 1 </tr>";
   	  	 		break;
   	  	 	case '7':
   	  	 		echo "<tr> 1</tr>";
   	  	 		break;
   	  	 	default:
   	  	 		
   	  	 		break;
   	  	 }
   	  echo "<tr>";
   	  for ($columna=0; $columna <$Ccolumnas ; $columna++)
   	   { 
   	  	 
   	  	 switch ($columna) {
   	  	 	case '1':
   	  	 		 echo "<td> lunes </td>";
   	  	 		break;
   	  	    case '2':
   	  	    	echo "<td> martes </td>";
   	  	    	break;
   	  	    case '3':
   	  	    	echo "<td> miercoles </td>";
   	  	    	break;
   	  	    case '4':
   	  	    	echo "<td> jueves </td>";
   	  	    	break;
   	  	 	case '5':
   	  	 		echo "<td> viernes </td>";
   	  	 		break;
   	  	 	case '6':
   	  	 		echo "<td> sabado </td>";
   	  	 		break;
   	  	 	case '7':
   	  	 		echo "<td> domingo </td>";
   	  	 		break;
   	  	 	default:
   	  	 		
   	  	 		break;
   	  	 }

   	   }

   }
   echo "</table>";
?>