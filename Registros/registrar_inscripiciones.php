<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $basedatos = "escuela";
    $link = mysqli_connect($servidor, $usuario, $clave, $basedatos);
    if(!$link)
    {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    }
    else
    {
      $link->set_charset("utf8");
      $clave=$_GET['Materias'];
      $matricula=$_GET['Matricula'];
      $calficacion=$_GET['Calificacion'];
      $observaciones=$_GET['OBS'];

      header("Agregar estados");

      $consulta="INSERT INTO inscripciones (CALVE,MATRICULA, CALIFICACION, OBS) VALUES
      ('$clave','$matricula','$calficacion','$observaciones')";
      $res = $link->query($consulta);
      $_SESSION['message']="Registro exitoso";
      header("Location: \proyect-Schoolnext\Inscripicones.php");
    }
?>
