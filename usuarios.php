<?php


function listar() {
    include('conexion_db.php');
    $sql = "SELECT * FROM usuarios";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
    // output data of each row
        while($row = $resultado->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " " . $row["correo"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
}

listar();

function crear() {
    include('conexion_db.php');
    $sql = "INSERT INTO usuarios (nombre, correo, celular)
    VALUES ('Cesar', 'ces@ces.com', '45689')";

    if ($conn->query($sql) === TRUE) {
    echo "Se creo el usuario con exito";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

//crear();

function editar() {
    
}

function actualizar() {
    include('conexion_db.php');
    $sql = "UPDATE usuarios SET nombre='Brian Cardona' WHERE id=2";

    if ($conn->query($sql) === TRUE) {
    echo "Usuario actualizado";
    } else {
    echo "Error al actualizar usuario: " . $conn->error;
    }

    $conn->close();
}

//actualizar();

function eliminar() {
    include('conexion_db.php');
    // sql to delete a record
    $sql = "DELETE FROM usuarios WHERE id=3";

    if ($conn->query($sql) === TRUE) {
    echo "Usuario eliminado";
    } else {
    echo "Error al eliminar usuario: " . $conn->error;
    }

    $conn->close();
}

//eliminar();