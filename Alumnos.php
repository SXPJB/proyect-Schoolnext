<?php include("db.php"); ?>
<?php include("includes/dbconect.php");?>
<?php include("includes/header.php");?>
<head>
  <title>Alumnos</title>
</head>
    <!--section formulario-->
    <?php 
    if(isset($_SESSION['message'])){
      echo '<script type="text/javascript"> alert("Registro exitoso"); </script>';
      session_unset();
    } 
    ?>
    <center>
    <h2>Registro de Alumnos</h2>
    <form class="forgot" action="Registros/registrar_alumnos.php" method="GET">
      <input type="text" name="Matricula" value="" placeholder="Matricula" maxlength="10" required><br>
      <input type="text" name="Nombre" value="" placeholder="Nombre" maxlength="30" required><br>
      <input type="text" name="APP" value="" placeholder="Apellido Paterno" maxlength="30" required><br>
      <input type="text" name="APM" value="" placeholder="Apellido Materno" maxlength="30" required><br>
      <select name="Sexo" required>
        <option value="Null">Sexo</option>
        <option value="H">Hombre</option>
        <option value="M">Mujer </option>
      </select><br>
      <input type="text" name="Direccion" value="" placeholder="Dirección" maxlength="45" required><br><br>
      <!--Comunicacion con base de datos para rellenar select (comobox)-->
      <select  name="Municipio" required>
        <option value="0">Municipio</option>
        <?php
          $query = $mysqli -> query ("SELECT * FROM municipios");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['CLAVE'].'">'.$valores['NOMBRE'].'</option>';
          }
        ?>
      </select><br>
      <!--Comunicacion con base de datos para rellenar select (comobox)-->
      <select name="Estados" required>
      <option value="0">Estado</option>
      <?php
        $query = $mysqli -> query ("SELECT * FROM estados");
        while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="'.$valores['CLAVE'].'">'.$valores['NOMBRE'].'</option>';
        }
      ?>
      </select><br>
      <input type="number" name="Grado" value="" placeholder="Grado" maxlength="2" required min="0" max="99"><br>
      <input type="text" name="Grupo" value="" placeholder="Grupo" maxlength="1" required>
      <h3>Fecha de Nacimiento</h3>
      <input type="date" name="Fecha_N" value="" required><br><br>
      <input type="submit" name="" value="Registrar" class="animated">
    </form></center>
 <?php include("includes/fooder.php");
