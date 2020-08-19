<?php include("header.php"); ?>
<head>
  <title>Cosulta 5</title>
</head>
<center>
  <br>
  <center><h1>Nombre de los alumnos condicionados</h1></center>
  <div class="table-title">
    <?php
    // Conectando, seleccionando la base de datos
    include("../includes/dbconect.php");
    // Realizar una consulta MySQL
    $query = "SELECT DISTINCT alumnos.NOMBRE,alumnos.APP,alumnos.APM FROM alumnos,inscripciones WHERE alumnos.MATRICULA=inscripciones.MATRICULA and inscripciones.OBS LIKE '%ondicionado'";
    $result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error($link));

    // Imprimir los resultados en HTML
    echo "<table>\n";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Apellido Paterno</th>";
    echo "<th>Apellido Materno</th>";
    echo "</tr>";
    while ($line = mysqli_fetch_array($result)) {//devuelve si hay elemnteos en la consula
      echo "<tr>";
      echo "<td>".$line['NOMBRE'] . "</ td><td>" . $line['APP']."</td><td>" .$line['APM']. "</td>";
      echo "</tr>";
    }
    echo "</table>\n";
    // Liberar resultados
    mysqli_free_result($result);
    // Cerrar la conexión
    mysqli_close($link);
    ?>
  </div>