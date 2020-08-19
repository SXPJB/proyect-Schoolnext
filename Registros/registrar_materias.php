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
      $Clave=$_GET['Clave'];
      $Nombre=$_GET['Nombre'];
      $Creditos=$_GET['Creditos'];

      header("Agregar Materias");

      $consulta="INSERT INTO materias ( CLAVE, NOMBRE, CREDITOS) values
      ('$Clave','$Nombre','$Creditos')";
      $res = $link->query($consulta);
      $_SESSION['message']="Registro exitoso";
      header("Location: \proyect-Schoolnext\Materias.php");
    }
?>
