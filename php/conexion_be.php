<?php
    $conexion=mysqli_connect("bd-pruebasdesoftware.database.windows.net","master","Somoskudasai17","bd_Electronica");  
    mysqli_set_charset($conexion, "utf8");

    
/*$servidor = "localhost";
$usuario = "root";
$contrasena = "test";
$base_de_datos = "bd_usuario";

try {
    // Crear una instancia de PDO
    $conexion = new PDO("mysql:host=$servidor;dbname=$base_de_datos;charset=utf8", $usuario, $contrasena);

    // Configurar el manejo de errores para PDO
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

    */
?>