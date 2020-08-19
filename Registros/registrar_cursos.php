<?php 
  include("../includes/dbconect.php");
  if(!$link){
    echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
  }else{
    $link->set_charset("utf8");
    $curso=$_GET['Curso'];
    $profesor=$_GET['Profesores'];
    $materias=$_GET['Materias'];
    $periodo=$_GET['Periodo'];
    $seciones=$_GET['Seciones'];
    
    $query="INSERT INTO cursos (CURSO, PROFESOR, MATERIA, PERIODO, SECIONES) values
    ('$curso','$profesor','$materias','$periodo','$seciones')";
    $res = $link->query($query);
    $_SESSION['message']="Registro exitoso";
    header("Location: \proyect-Schoolnext\cursos.php");
  }
?>
