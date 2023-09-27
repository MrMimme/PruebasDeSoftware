<?php
    /*$conexion=mysqli_connect("bd-pruebasdesoftware.database.windows.net","master","Somoskudasai17","bd_Electronica");  
    mysqli_set_charset($conexion, "utf8");
    */
    $host = 'bd-pruebasdesoftware.database.windows.net';
    $username = 'master';
    $password = 'Somoskudasai17';
    $db_name = 'bd_Electronica';
    
    //Initializes MySQLi
    $conn = mysqli_init();
    // Establish the connection
    mysqli_real_connect($conn, $host, $username, $password, $db_name);
    
    //If connection failed, show the error
    if (mysqli_connect_errno())
    {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }

?>