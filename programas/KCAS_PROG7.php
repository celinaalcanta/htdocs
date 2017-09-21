<link rel="stylesheet" type="text/css" href="estilosprog7.css">
</head>
<body>
    
     <?php
       
        $meses=1;
        
        $dias_mes=date("d");
        $anio=date("Y");
        $mes_actual=date("n");
        $mes=date("m");
         echo "<h1>CALENDARIO AÑO :".$anio."</h1>";

        for ($meses=1; $meses <=12 ; $meses++) 
        { 
          echo "<div>";
          $dia=1;
           $dia1=date("w",mktime(0,0,0,$meses,1,$anio));
           $dia_mes=date("t",mktime(0,0,0,$meses,1,$anio));
        
        print "<table border=1 cellspacing=0>";
        switch ($meses) 
        {
          case 1:
              echo "<h1>Enero</h1>";
            break;
          case 2:
              echo "<h1>Febrero</h1>";
             
            break;
          case 3:
              echo "<h1>Marzo</h1>";
            break;
          case 4:
              echo "<h1>Abril</h1>";
            break;
          case 5:
              echo "<h1>Mayo</h1>";
            break;
          case 6:
              echo "<h1>Junio</h1>";
            break;
          case 7:
              echo "<h1>Julio</h1>";
            break;
          case 8:
              echo "<h1>Agosto</h1>";
            break;
          case 9:
              echo "<h1>Septiembre</h1>";
            break;
          case 10:
              echo "<h1>Octubre</h1>";
            break;
          case 11:
              echo "<h1>Noviembre</h1>";
            break;
          case 12:
              echo "<h1>Diciembre</h1>";
            break;
          
          default:
            # code...
            break;
        }
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
        echo "</div>";
      }
         
     ?>
     
</body>
</html>