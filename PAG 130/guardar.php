<?php

$conexion = new mysqli("localhost", "root", "", "compañeros");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];

$sql = "INSERT INTO datos_personales
(nombre, edad, sexo, correo, direccion)

VALUES
('$nombre', '$edad', '$sexo', '$correo', '$direccion')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();

?>