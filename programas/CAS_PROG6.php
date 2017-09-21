<!DOCTYPE html>
<html>
<head>
	<title>Calendario</title>
	<link rel="stylesheet" type="text/css" href="estilosprog6.css">
</head>
<body>
     <?php
        $dia=1;
        $dia_mes=date("t");
        $dias_mes=date("d");
        $anio=date("Y");
        $mes_actual=date("n");
        $mes=date("m");
        $dia1=date("w",mktime(0,0,0,$mes_actual,1,$anio));

        print "<table border=1 cellspacing=0>";
        for ($fila=1; $fila <=7 ; $fila++) 
        { 
        	print "<tr>";
        	for ($col=1; $col <=7; $col++) 
        	{ 

        		$var=$fila.$col;
        		switch ($var) {
        			case '11':
      	  	 		echo "<th>Domingo</th> ";
      	  	 		break;
      	  	    case '12':
      	  	    	echo "<th>Lunes</th>";
      	  	    	break;
      	  	    case '13':
      	  	    	echo "<th>Martes</th>";
      	  	    	break;
      	  	    case '14':
      	  	    	echo "<th>Miercoles</th>";
      	  	    	break;
      	  	    case '15':
      	  	    	echo "<th>Jueves</th>";
      	  	    	break;
      	  	    case '16':
      	  	    	echo "<th>Viernes</th>";
      	  	    	break;
      	  	    case '17':
      	  	    	echo "<th>Sabado</th>";
                   break;
        			
        			default:
        				 if ($dia>$dia_mes) 
                 {
                   break;
                 }
                 if ($dia==1) 
                 {
                   if ($dia1+1==$col) 
                   {
                     print "<td>$dia</td>";
                     $dia=$dia+1;
                   }
                  else
                  {
                    echo "<td id=vacio class=()></td>";
                  }

                 }
                  else 
                   {
                     print "<td>$dia</td>";
                     $dia++;
                   }
        				break;
        		}
        	

        	}
        	print "</tr>";
        }
        print "</table>";

     ?>
</body>
</html>