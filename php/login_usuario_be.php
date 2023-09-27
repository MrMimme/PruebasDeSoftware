<?php
    /*
    //Iniciliza la sesion y manda a llamar la conexion
    session_start();
    include 'conexion_be.php';

    //Recibe los valores por metodo POST y encripta la contraseña para compara en la BD
    $corrreo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$corrreo'
                     and contrasena = '$contrasena'");


  


    if(mysqli_num_rows($validar_login) > 0){

        

        $_SESSION['Usuario'] = $corrreo;
        header("location: ../HomePage.php");
        exit;
    }else{
        echo '
                <script>
                    alert("Usuario no existe por favor verifique los datos introduciodos");
                    window.location = "../index.php";
                </script>    
        ';
        exit;
    }*/


    session_start();

include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Prepara la consulta SQL
$query = "SELECT * FROM usuarios WHERE correo = :correo AND contrasena = :contrasena";
$stmt = $conexion->prepare($query);
$stmt->bindParam(':correo', $correo);
$stmt->bindParam(':contrasena', $contrasena);
$stmt->execute();

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


?>