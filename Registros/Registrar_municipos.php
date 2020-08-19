<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $basedatos = "Escuela";
    $link = mysqli_connect($servidor, $usuario, $clave, $basedatos);
    if(!$link)
    {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    }
    else
    {
      $link->set_charset("utf8");
      $clave=$_GET['CLAVE'];
      $nombre=$_GET['NOMBRE'];
      header("Agregar Municipio");

      $consulta="INSERT INTO municipios (CLAVE, NOMBRE) values
      ('$clave','$nombre')";
      $res = $link->query($consulta);
      $_SESSION['message']="Registro exitoso";
      header("Location: \proyect-Schoolnext\Municipios.php");
    }
?>
