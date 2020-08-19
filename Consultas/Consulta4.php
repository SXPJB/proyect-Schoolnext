<?php include("header.php") ?>
<head>
  <title>Consulta 4</title>
</head>
<br>
    <center><h1>Alumnos inscritos en la materia Ciencias Naturales</h1></center>
    <div class="table-title">
    <?php
    // Conectando, seleccionando la base de datos
    include("../includes/dbconect.php");
    // Realizar una consulta MySQL
    $query = "SELECT alumnos.NOMBRE,alumnos.APP,alumnos.APM FROM alumnos,cursos,inscripciones,materias
              WHERE cursos.CURSO=inscripciones.CALVE and alumnos.MATRICULA=inscripciones.MATRICULA
              AND materias.CLAVE=cursos.MATERIA AND materias.NOMBRE like  '%iencias %aturales'";
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
      echo "<td>".$line['NOMBRE'] . "</td><td>" . $line['APP']."</td><td>" .$line['APM']. "</td>";
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