<?php include("header.php");?>
<br>
  <center><h1> Numero de los alumnos que viven en Apetatitlan </h1></center>
  <div class="table-title">
  <?php
    // Conectando, seleccionando la base de datos
    include("../includes/dbconect.php");
    // Realizar una consulta MySQL
    $query = "SELECT COUNT(municipios.NOMBRE) AS Numero_de_alumnos FROM alumnos,municipios WHERE alumnos.MPIO=municipios.CLAVE and municipios.NOMBRE LIKE '%petatitlan'";
    $result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));

    // Imprimir los resultados en HTML
    echo "<center><table>\n";
    echo "<tr>";
    echo "<th>Numero de alumnos</th>";
    echo "</tr>";

    while ($line = mysqli_fetch_array($result)) {//devuelve si hay elemnteos en la consula
      echo "<tr>";
      echo "<td>".$line['Numero_de_alumnos']."</td>";
      echo "</tr>";
    }
    echo "</table></center>\n";

    // Liberar resultados
    mysqli_free_result($result);

    // Cerrar la conexión
    mysqli_close($link);
  ?>
</div>
