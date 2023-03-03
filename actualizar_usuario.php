<?php
    include('conexion_db.php');
    $json = file_get_contents('php://input');
    $datosForm = json_decode($json);
    // var_dump($datosForm);
    
    $id = $datosForm->id;
    $nombre = $datosForm->nombre;
    $correo = $datosForm->correo;
    $celular = intval($datosForm->celular);

    $sql = "UPDATE usuarios SET nombre='$nombre', correo='$correo', celular='$celular' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usuario $nombre actualizado con exito";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
?>