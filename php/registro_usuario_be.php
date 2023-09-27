<?php

    include 'conexion_be.php';


    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $Usuario=$_POST['Usuario'];
    $password=$_POST['password'];

    $query="INSERT INTO `usuarios`(`nombre`, `correo`, `usuario`, `contrasena`) 
            VALUES ('$nombre','$correo','$Usuario','$password')";


    $ejecutar=mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        <script>
        alert("El usuario Ah sido Almacenado de manera Correcta");
        window.location="../index.php";
        </script>';
    }
    else
    {
        echo'
        <script>
        alert("Error el usuario No se alamceno de 
        manera Correcta!!
        intentalo otra vez");
        window.location="../index.php";
        </script>';

    }

    mysqli_close($conexion);

/*

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$Usuario = $_POST['Usuario'];
$password = $_POST['password'];

try {
    // Crear una instancia de PDO
    $conexion = new PDO("mysql:host=$servidor;dbname=$base_de_datos;charset=utf8", $usuario, $contrasena);

    // Configurar el manejo de errores para PDO
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Preparar la consulta SQL
    $query = "INSERT INTO `usuarios`(`nombre`, `correo`, `usuario`, `contrasena`) 
              VALUES (:nombre, :correo, :usuario, :contrasena)";
    $statement = $conexion->prepare($query);

    // Asignar valores a los parámetros de la consulta
    $statement->bindParam(':nombre', $nombre);
    $statement->bindParam(':correo', $correo);
    $statement->bindParam(':usuario', $Usuario);
    $statement->bindParam(':contrasena', $password);

    // Ejecutar la consulta
    $resultado = $statement->execute();

    if ($resultado) {
        echo '
        <script>
        alert("El usuario ha sido almacenado de manera correcta");
        window.location="../index.php";
        </script>';
    } else {
        echo '
        <script>
        alert("Error: El usuario no se almacenó de manera correcta, intentalo otra vez");
        window.location="../index.php";
        </script>';
    }
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

*/

?>