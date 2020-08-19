<?php include("includes/dbconect.php");?>
<?php include("includes/header.php");?>
<head>
   <title>Municipiosi</title>
</head>
<?php 
    if(isset($_SESSION['message'])){
      echo '<script type="text/javascript"> alert("Registro exitoso"); </script>';
      session_unset();
    } 
  ?>
<center>
    <h2>Registro de Municipios </h2>
    <form class="forgot" action="/proyect-Schoolnext/Registros/Registrar_municipos.php" method="GET">
        <input type="text" name="CLAVE" value="" placeholder="CLAVE" maxlength="10" required><br>
        <input type="text" name="NOMBRE" value="" placeholder="NOMBRE" maxlength="100" required><br>
        <input type="submit" name="" value="Registrar" class="animated">
    </form>
</center>
<?php include("includes/fooder.php");?>