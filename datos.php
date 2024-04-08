<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "usuario";
$password = obtenerPasswordDeConfiguracion(); // Función para obtener la contraseña desde un archivo de configuración o variable de entorno
$dbname = "basededatos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los datos
$sql = "SELECT nombre, edad FROM tabla";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Imprimir los datos
    while($row = $result->fetch_assoc()) {
        echo "<li>Nombre: " . $row["nombre"]. " | Edad: " . $row["edad"]. "</li>";
    }
} else {
    echo "0 resultados";
}

$conn->close();

// Función para obtener la contraseña desde un archivo de configuración o variable de entorno
function obtenerPasswordDeConfiguracion() {
    // Aquí puedes implementar la lógica para obtener la contraseña desde un archivo de configuración externo o variable de entorno
    // Por ejemplo:
    // return getenv('DB_PASSWORD'); // Si utilizas variables de entorno
    // return file_get_contents('/ruta/al/archivo/config.txt'); // Si utilizas un archivo de configuración
}
?>


$conn->close();
?>
