<?php
    include('conexion_db.php');
    $json = file_get_contents('php://input');
    $datosForm = json_decode($json);
    // var_dump($datosForm);
    
    $id = $datosForm->id;
    $nombre = $datosForm->nombre;

    $sql = "DELETE FROM usuarios WHERE id ='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usuario $nombre eliminado";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
?>