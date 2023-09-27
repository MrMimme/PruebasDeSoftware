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


   //Inicializa la sesion y manda a llamar la conexion
   session_start();
   require_once 'conexion_be.php';

   //Recibe los valores por metodo POST y encripta la contraseña para compara en la BD
   $correo = $_POST['correo'];
   $contrasena = $_POST['contrasena'];

   //Realiza la consulta a la base de datos
   $consulta = $conexion->prepare("SELECT * FROM usuarios WHERE correo = :correo AND contrasena = :contrasena");
   $consulta->bindParam(':correo', $correo);
   $consulta->bindParam(':contrasena', $contrasena);
   $consulta->execute();

   //Verifica si hay resultados
   if ($consulta->rowCount() > 0) {

       //Crea la sesión del usuario
       $_SESSION['Usuario'] = $correo;

       //Redirecciona al usuario a la página principal
       header("location: ../HomePage.php");
       exit;

   } else {

       //Muestra un mensaje de error
       echo '
               <script>
                   alert("Usuario no existe por favor verifique los datos introduciodos");
                   window.location = "../index.php";
               </script>    
       ';
       exit;
   }


?>