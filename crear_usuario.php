<?php
    include('conexion_db.php');
    $json = file_get_contents('php://input');
    $datosForm = json_decode($json);
    // var_dump($datosForm);
  
    $nombre = $datosForm->nombre;
    $correo = $datosForm->correo;
    $celular = intval($datosForm->celular);

    $sql = "INSERT INTO usuarios (nombre, correo, celular) 
    VALUES ('$nombre', '$correo', '$celular')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usuario $nombre creado con exito";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
?>