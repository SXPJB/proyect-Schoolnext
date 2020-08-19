<?php include("header.php"); ?>
<br>
  <center><h1>Promedio de calificaciones por alumno</h1></center>
    <div class="table-title">
    <?php
    // Conectando, seleccionando la base de datos
    include("../includes/dbconect.php");
    // Realizar una consulta MySQL
    $query = "SELECT DISTINCT alumnos.NOMBRE, AVG(inscripciones.CALIFICACION) AS Promedio
    FROM inscripciones,cursos,alumnos,materias WHERE cursos.MATERIA = materias.CLAVE AND inscripciones.MATRICULA=alumnos.MATRICULA
    GROUP by alumnos.NOMBRE";
    $result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));

    // Imprimir los resultados en HTML
    echo "<center><table>\n";
    echo "<tr>";
    echo "<th>Alumno</th>";
    echo "<th>Promedio</th>";
    echo "</tr>";
    while ($line = mysqli_fetch_array($result)) {//devuelve si hay elemnteos en la consula
      echo "<tr>";
      echo "<td>".$line['NOMBRE'] . "</td><td>" . $line['Promedio']."</td>";
      echo "</tr>";
    }
    echo "</table></center>\n";

    // Liberar resultados
    mysqli_free_result($result);

    // Cerrar la conexión
    mysqli_close($link);
    ?>
  </div>
<?php include("fooder.php"); ?>
