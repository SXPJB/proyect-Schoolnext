<?php include("db.php");?>
<?php include("includes/dbconect.php");?>
<?php include("includes/header.php");?>
<head>
   <title>Profesores</title>
</head>
<center>
  <?php 
    if(isset($_SESSION['message'])){
      echo '<script type="text/javascript"> alert("Registro exitoso"); </script>';
      session_unset();
    } 
  ?>
    <h2>Registro de Profesores</h2>
    <form class="forgot" action="/proyect-Schoolnext/Registros/registrar_docentes.php" method="GET">
      <input type="text" name="NEmpleado" value="" placeholder="Numero de Empleado" maxlength="10" required><br>
      <input type="text" name="Nombre" value="" placeholder="Nombre" maxlength="30" required><br>
      <input type="text" name="APP" value="" placeholder="Apellido Paterno" maxlength="30" required><br>
      <input type="text" name="APM" value="" placeholder="Apellido Materno" maxlength="30" required><br>
      <select name="Sexo" required>
        <option value="Null">Sexo</option>
        <option value="H">Hombre</option>
        <option value="M">Mujer </option>
      </select><br>
      <input type="text" name="Direccion" value="" placeholder="Dirección" maxlength="45" required><br><br>
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
      <h3>Fecha de Nacimiento</h3>
      <input type="date" name="Fecha_N" value="" required><br><br>
      <input type="submit" name="" value="Registrar" class="animated">
    </form>
</center>
<?php include("includes/fooder.php");?>