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
      $ClvEstado=$_GET['ClvEstado'];
      $nombre=$_GET['Nombre'];
      header("Agregar estados");

      $consulta="INSERT INTO estados (CLAVE, NOMBRE) values
      ('$ClvEstado','$nombre')";
      $res = $link->query($consulta);
      $_SESSION['message']="Registro exitoso";
      header("Location: \proyect-Schoolnext\Estados.php");
     }
?>
