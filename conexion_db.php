<?php

$servidor = "localhost";
$usuario = "brian";
$clave = "brian";
$baseDeDatos = "registro_de_usuarios";

// Crear conexion
$conn = new mysqli($servidor, $usuario, $clave, $baseDeDatos);

// Validar conexion
//if ($conn->connect_error) {
//    die("Fallo la conexion a la base de datos: " . $conn->connect_error);
//  }
//  echo "Conexion Exitosa";