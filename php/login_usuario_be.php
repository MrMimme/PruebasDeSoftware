<?php
session_start();

include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

try {
    // Prepara la consulta SQL usando parámetros con marcadores de posición
    $query = "SELECT * FROM usuarios WHERE correo = :correo AND contrasena = :contrasena";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':contrasena', $contrasena);
    $stmt->execute();

    // Comprueba si se encontraron resultados
    if ($stmt->rowCount() > 0) {
        $_SESSION['Usuario'] = $correo;
        header("location: ../HomePage.php");
        exit;
    } else {
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../index.php";
            </script>';
        exit;
    }
} catch (PDOException $e) {
    // Manejo de errores de PDO
    echo "Error: " . $e->getMessage();
}
?>





