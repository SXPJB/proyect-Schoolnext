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
      $nEmpleado=$_GET['NEmpleado'];
      $nombre=$_GET['Nombre'];
      $app=$_GET['APP'];
      $apm=$_GET['APM'];
      $sexo=$_GET['Sexo'];
      $direccion=$_GET['Direccion'];
      $municipio=$_GET['Municipio'];
      $estados=$_GET['Estados'];
      $fecha_N=$_GET['Fecha_N'];
      header("Agregar Docentes");

      $consulta="INSERT INTO profesores (CLAVE, NOMBRE, APP, APM, SEXO, DIRECCION, MPIO, EDO,NAC) values
      ('$nEmpleado','$nombre','$app','$apm','$sexo','$direccion','$municipio','$estados','$fecha_N')";
      $res = $link->query($consulta);
      $_SESSION['message']="Registro exitoso";
      header("Location: \proyect-Schoolnext\Profesores.php");
    }
?>
