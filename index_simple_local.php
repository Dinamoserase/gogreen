<?php
$host = 'db'; // Nombre o dirección IP del host donde se encuentra el servidor de MySQL
$port = '3306'; // Puerto en el que se encuentra el servidor de MySQL
$user = 'isotader'; // Nombre del usuario de la base de datos
$password = 'admin9000ISO.'; // Contraseña del usuario de la base de datos
$database = 'gogreen'; // Nombre de la base de datos

// Crear una conexión a la base de datos
$conexion = new mysqli($host, $user, $password, $database, $port);

// Verificar la conexión
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

// Consultar una fila de la tabla
$sql = 'SELECT * FROM kpi LIMIT 1'; 
//$sql = 'SHOW DATABASES;'; 
$resultado = $conexion->query($sql);

// Mostrar el resultado
if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    // echo 'ID: ' . $fila['id'] . '<br>';
    // echo 'Nombre: ' . $fila['nombre'] . '<br>';
    echo 'Imprimo la fila: ' . $fila['id_informe'] . $fila['nombre'] .'<br>';
    // Agrega aquí más campos de la tabla que desees mostrar
} else {
    echo 'No se encontraron filas.';
}

// Cerrar la conexión
$conexion->close();
?>
