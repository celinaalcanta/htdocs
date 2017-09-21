<!DOCTYPE html>
<html>
<head>
	<title>Calendario</title>
</head>
<link rel="stylesheet" type="text/css" href="estilosprog6.css">
<body>
    <table border="1" cellspacing="0">
	<?php
      $dias=1;
      $numero=1;
      $mes=date("m");
      $anio=date("Y");
      $mes_calendario=date("w",mktime(0,0,0,$mes,1,$anio));
      $numero_mes=date("m");
      $numero_dias=date("t");
      
            
      for ($fila=1; $fila <=$mes_calendario; $fila++)
       { 
       	
      	echo "<tr>";
      	 
      	  for ($columna=1; $columna <=7 ; $columna++)
      	   { 

      	  	 switch ($dias) 
      	  	 {
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
                default:
                  if ($dias>$numero_dias) 
                  {
                  	break;
                  }
             if ($dias==1) 
                  {
                    if ($mes_calendario+1==$columna) 
                    {
                      echo "<td>$dias</td>";
                      $dias++;
                      
                    }
                    else{
                    echo "<td>$dias</td>";
                     $dias++;
                    break;
                  }
                  }
                  else{
                    echo "<td>$dias</td>";
                     $dias++;
                    break;
                  }

                    
                  
                  
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
</body>
</html>