<?php
include("Config.php");
    
$con=new mysqli(Config::$mvc_bd_hostname, Config::$mvc_bd_usuario, Config::$mvc_bd_clave, Config::$mvc_bd_nombre);
if ($con->connect_error) {
    die('Error de Conexión (' . $con->connect_errno . ') '. $con->connect_error);
}
else{

    if ($con->query("CREATE DATABASE alimentos32019") === TRUE) {
    printf("Se creó con éxtio la base de datos alimentos32019.\n");
    }
    if ($con->query("USE alimentos32019") === TRUE) {
    printf("Usando la base de datos  alimentos32019.\n");
    }
    include("sentencias.sql.php");
     if ($con->multi_query($sentenciasql) === TRUE) {
    printf("Script de creación de tablas en la base de datos alimentos32019.\n");
    }
   

  $con->close();
}

?>