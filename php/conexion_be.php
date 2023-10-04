<?php

    // Define las variables de conexión a la base de datos
    $hostname = "pruebas-de-software.mysql.database.azure.com";
    $username = "master";
    $password = "Somoskudasai17";
    $database = "bd_Electronica";
    
    // Realiza la conexión a la base de datos
    $conn = mysqli_connect($hostname, $username, $password, $database);
    
    // Comprueba si la conexión es correcta
    if (!$conn) {
      die("Error al conectarse a la base de datos: " . mysqli_connect_error());
    }
    
  
    // Cierra la conexión a la base de datos
    mysqli_close($conn);
    
  
?>