<?php include("db.php");?>
<?php include("includes/dbconect.php");?>
<?php include("includes/header.php");?>
<head>
   <title>Cursos</title>
</head>
<center>
  <?php 
    if(isset($_SESSION['message'])){
      echo '<script type="text/javascript"> alert("Registro exitoso"); </script>';
      session_unset();
    } 
  ?>
    <h2>Registar Cursos</h2>
    <form class="forgot" action="Registros/registrar_cursos.php" method="GET">
      <input type="text" name="Curso" value="" placeholder="Cruso" maxlength="10" required><br>
      <!--Comunicacion con base de datos para rellenar select (comobox)-->
      <select  name="Profesores" required>
        <option value="0">Profesores</option>
        <?php
          $query = $mysqli -> query ("SELECT profesores.CLAVE,profesores.NOMBRE FROm profesores");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['CLAVE'].'">'.$valores['NOMBRE'].'</option>';
          }
        ?>
      </select><br>
      <!--Comunicacion con base de datos para rellenar select (comobox)-->
      <select name="Materias" required>
      <option value="0">Materias</option>
      <?php
        $query = $mysqli -> query ("SELECT CLAVE,NOMBRE FROM materias");
        while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores['CLAVE'].'">'.$valores['NOMBRE'].'</option>';
        }
      ?>
      </select><br>
      <input type="text" name="Periodo" value="" placeholder="Periodo" maxlength="20" required><br>
      <input type="text" name="Seciones" value="" placeholder="Seciones" maxlength="20" required><br><br>
      <input type="submit" name="" value="Registrar" class="animated" required>
    </form></center>
<?php include("includes/fooder.php");?>