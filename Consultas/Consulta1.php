<?php include("header.php") ?>
<head>
  <title>Consulta 1</title>
</head>
<center>
    <br>
    <center><h1>Nombre de todos los alumnos con apellido Portilla</h1></center>
    <div class="table-title">
    <?php
    // Conectando, seleccionando la base de datos
    include("../includes/dbconect.php");
    // Realizar una consulta MySQL
    $query = "SELECT MATRICULA,NOMBRE,APP,APM FROM `alumnos` WHERE APP like '%ortilla' or APM like '%ortilla'";
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
<?php include("fooder.php") ?>
