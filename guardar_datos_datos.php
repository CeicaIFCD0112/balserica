<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "id22073612_balserica";
$password = "@NadaRod2024";
$database = "id22073612_inmertion";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$apodo = $_POST['apodo'];

// Preparar la consulta SQL para insertar los datos en la tabla
$sql = "INSERT INTO movies (nombre, apellidos, apodo) VALUES ('$nombre', '$apellidos',  '$apodo',)";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    // Redirigir a conexion.php
    header("Location: conexion.php");
    echo "Datos guardados correctamente.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>