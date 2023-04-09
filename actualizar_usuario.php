<?php
    include('conexion_db.php');
    include('funciones_globales.php');
    $json = file_get_contents('php://input');
    $datosForm = json_decode($json);
    // var_dump($datosForm);
    
    $id = $datosForm->id;
    $nombre = $datosForm->nombre;
    $correo = $datosForm->correo;
    $celular = intval($datosForm->celular);

    // Valida datos de usuario y guarda en bd
    if(validarUsuario($nombre, $correo, $celular) === 1){
      $sql = "UPDATE usuarios SET nombre='$nombre', correo='$correo', celular='$celular' WHERE id='$id'";
      
      if ($conn->query($sql) === TRUE) {
          echo json_encode(["estado"=>1, "mensaje"=>"Usuario actualizado con exito"]);
        } else {
          echo json_encode(["estado"=>-1, "mensaje"=>"Error: " . $sql . "<br>" . $conn->error]);
        }
        
        $conn->close();
    }
?>