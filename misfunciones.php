<?php


function conectaBBDD(){
    require ('configuracion.php');
    $conexion = new mysqli($servidor, $usuario_mysql, $clave_mysql, $bd);
    $conexion -> query("SET NAMES UTF8");
    return $conexion;
}

