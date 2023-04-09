<?php
  include('conexion_db.php');
  include('funciones_globales.php');

  // Recibe y decodifica el json
  $json = file_get_contents('php://input');
  $datosForm = json_decode($json);

  // Establece variables de usuario
  $nombre = $datosForm->nombre;
  $correo = $datosForm->correo;
  $celular = $datosForm->celular;

  // Valida datos de usuario y guarda en bd
  if(validarUsuario($nombre, $correo, $celular) === 1){
    $sql = "INSERT INTO usuarios (nombre, correo, celular) 
    VALUES ('$nombre', '$correo', '$celular')";
    
    if ($conn->query($sql) === TRUE) {
      echo json_encode(["estado"=>1, "mensaje"=>"Usuario creado con exito"]);
    } else {
      echo json_encode(["estado"=>-1, "mensaje"=>"Error: " . $sql . "<br>" . $conn->error]);
      //"Error: " . $sql . "<br>" . $conn->error;
    }
      
    $conn->close();
  }
?>