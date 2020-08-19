<?php include("db.php");?>
<?php include("includes/dbconect.php");?>
<?php include("includes/header.php");?>
<head>
   <title>Inscripciones</title>
</head>
<?php 
    if(isset($_SESSION['message'])){
      echo '<script type="text/javascript"> alert("Registro exitoso"); </script>';
      session_unset();
    } 
?>
<center>
    <h2>Inscripciones</h2>
    <form class="forgot" action="/proyect-Schoolnext/Registros\registrar_inscripiciones.php" method="GET">
      <select  name="Materias">
        <option value="null">Materia</option>
        <?php
          $query = $mysqli -> query ("SELECT cursos.CURSO,materias.NOMBRE FROM cursos,materias WHERE materias.CLAVE=cursos.MATERIA");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['CURSO'].'">'.$valores['NOMBRE'].'</option>';
          }
        ?>
      </select><br>
      <input type="text" name="Matricula" value="" placeholder="Matricula" maxlength="30" required><br>
      <input type="text" name="Calificacion" value="" placeholder="Calificacion" maxlength="10" required><br>
      <input type="text" name="OBS" value="" placeholder="Obersavaciones" maxlength="30" required><br><br>
      <input type="submit" name="" value="Registrar" class="animated">
    </form>
<center>
<?php include("includes/fooder.php");?>