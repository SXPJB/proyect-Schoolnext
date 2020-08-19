<?php include("header.php");?>
<head>
   <title>Cosulta 2</title>
</head>
 <br>
   <center><h1>Numero de alumnos en la Base de Datos</h1></center>
   <div class="table-title">
   <?php
   // Conectando, seleccionando la base de datos
   include("../includes/dbconect.php");
   // Realizar una consulta MySQL
   $query = "SELECT COUNT(MATRICULA) as Total_Alumnos FROM alumnos";
   $result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));
   // Imprimir los resultados en HTML
   echo "<center>";
   echo "<table>\n";
   echo "<tr>";
 echo "<th>Total de Alumnos</th>";
   echo "</tr>";
   while ($line = mysqli_fetch_array($result)) {//devuelve si hay elemnteos en la consula
     echo "<tr>";
       echo "<td>".$line['Total_Alumnos']."</td>";
     echo "</tr>";
   }
   echo "</table>\n";
   echo "</center>";
   // Liberar resultados
   mysqli_free_result($result);

   // Cerrar la conexión
   mysqli_close($link);
   ?>
   </div>
<?php include("fooder.php");?>
