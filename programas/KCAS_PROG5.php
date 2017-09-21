 <!DOCTYPE html>
 <html>
 <head>
 	<title>PROG_5</title>
 	<link rel="stylesheet" type="text/css" href="prog5estilos.css">
 </head>
 <body>
     <?php
        $fecha=date("d.m.y");
        echo "La fecha actual es: ".$fecha."<br>";

        $dia=date("d");
        echo "Día: ".$dia."<br>";

        $mes=date("m");
        echo "Mes: ".$mes."<br>";

        $anio=date("Y");
        echo "Año: ".$anio."<br>";

        $DiaMes=date("t");
        echo "El mes actual tiene: ".$DiaMes." Dias"."<br>";

        $primer=date("w",mktime(0,0,0,$mes,1,$anio));
        echo "El primer día del mes actual es: ".$primer;

     ?>
 </body>
 </html>