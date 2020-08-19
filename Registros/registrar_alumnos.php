<?php
    include('../includes/dbconect.php');
    if(!$link)
    {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    }
    else
    {
      $link->set_charset("utf8");
      $matricula=$_GET['Matricula'];
      $nombre=$_GET['Nombre'];
      $app=$_GET['APP'];
      $apm=$_GET['APM'];
      $sexo=$_GET['Sexo'];
      $direccion=$_GET['Direccion'];
      $municipio=$_GET['Municipio'];
      $estados=$_GET['Estados'];
      $grado=$_GET['Grado'];
      $grupo=$_GET['Grupo'];
      $fecha_N=$_GET['Fecha_N'];
      header("Agregar alumnos");

      $consulta="INSERT INTO alumnos (MATRICULA, NOMBRE, APP, APM, SEXO, DIRECCION, MPIO, EDO, GRADO, GRUPO, NAC) values
      ('$matricula','$nombre','$app','$apm','$sexo','$direccion','$municipio','$estados','$grado','$grupo','$fecha_N')";
      $res = $link->query($consulta);
      $_SESSION['message']="Registro exitoso";
      header("Location: \proyect-Schoolnext\Alumnos.php");
    }
?>
