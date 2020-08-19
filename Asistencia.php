<?php include("includes/header.php") ?>
<?php include("includes/dbconect.php");?>
<head>
   <title>Acistencia</title>
</head>
<?php 
    if(isset($_SESSION['message'])){
      echo '<script type="text/javascript"> alert("Registro exitoso"); </script>';
      session_unset();
    } 
  ?>
   <center>
      <h2>Registro de asistencias</h2>
      <form class="" action="Registros/registro_clases.php" method="GET">
        <input type="text" name="CLAVE" value="" placeholder="Clave de materia" maxlength="10" required><br>
        <input type="text" name="Matricula" value="" placeholder="Matricula" maxlength="30" required><br>
        <input type="date" name="Fecha" value="" required><br><br>
        <input type="submit" name="" value="Registrar" class="animated">
      </form>
   </center>
<?php include("includes/fooder.php") ?>
