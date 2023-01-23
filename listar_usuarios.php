<?php
    include('conexion_db.php');
    $sql = "SELECT * FROM usuarios";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        while($row = $resultado->fetch_assoc()) {
            $datos[] = $row;
        }

        echo json_encode($datos);
    } else {
        $datos = [];
        echo json_encode($datos);;
    }
    $conn->close();
?>

