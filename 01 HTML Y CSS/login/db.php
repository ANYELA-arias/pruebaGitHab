<?php
class db {
    private $host = "localhost"; // Dirección del servidor MySQL
    private $dbname = "colegio"; // Nombre de tu base de datos
    private $user = "root";      // Usuario de MySQL (por defecto en XAMPP)
    private $pass = "";          // Contraseña (por defecto vacía en XAMPP)

    public function conexion(): PDO {
        try {
            // Crear la conexión con PDO
            $PDO = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configurar errores
            return $PDO; 
            // Retornar la conexión
        } catch (PDOException $e) {
            throw new Exception("Error al conectar la base de datos: " . $e->getMessage());
        }
    }
}
?>