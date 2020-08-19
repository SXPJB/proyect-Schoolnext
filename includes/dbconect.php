<?php
    session_start();
    $servidor = "localhost:3306";
    $usuario = "root";
    $clave = 'So76699/#/$"/';
    $basedatos = "escuela";
    $link = mysqli_connect($servidor, $usuario, $clave, $basedatos)
    or die('No se pudo conectar: '. mysqli_error($link));
    mysqli_select_db($link,'escuela') or die('No se pudo seleccionar la base de datos');;
?>