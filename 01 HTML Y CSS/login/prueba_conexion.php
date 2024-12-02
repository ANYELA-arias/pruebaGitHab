<?php
require_once 'db.php'; // Incluir la clase de conexión

try {
    $conexion = (new db())->conexion(); // Crear instancia y conectar
    echo "Conexión exitosa a la base de datos.";
} catch (Exception $e) {
    echo $e->getMessage(); // Mostrar el mensaje de error si falla
}
?>
