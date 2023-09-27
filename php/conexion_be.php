<?php
    /*$conexion=mysqli_connect("bd-pruebasdesoftware.database.windows.net","master","Somoskudasai17","bd_Electronica");  
    mysqli_set_charset($conexion, "utf8");
    */
    // Importar el controlador de PHP para SQL Server

    $server = "bd-pruebasdesoftware.database.windows.net";
    $database = "bd_Electronica";
    $username = "master";
    $password = "Somoskudasai17";

   

// Crear una instancia del controlador
$conn = new PDO("sqlsrv:Server=$server;Database=$database", $username, $password);


?>