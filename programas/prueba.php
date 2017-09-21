<table border="1" cellspacing="0">
	<?php
       $numero=1;
       for ($numero1=1; $numero1 <=7 ; $numero1++) 
       { 
       	echo "<tr>";
       	 for ($numero2=1; $numero2 <=7 ; $numero2++)
       	  { 
       	 	echo "<td>".$numero;
       	 	echo "</td>";
       	 	$numero++;
       	 }
       	echo "</tr>";
       }

	?>
</table>