<?php
    /*$conexion=mysqli_connect("bd-pruebasdesoftware.database.windows.net","master","Somoskudasai17","bd_Electronica");  
    mysqli_set_charset($conexion, "utf8");
    */
    $serverName = "bd-pruebasdesoftware.database.windows.net";
    $connectionOptions = array(
        "Database" => "bd_Electronica",
        "Uid" => "master",
        "PWD" => "Somoskudasai17"
    );
    
    // Establece la conexión
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    
    if ($conn === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    
    // Realiza consultas, operaciones, etc., con la conexión $conn
    
    // Cierra la conexión
    sqlsrv_close($conn);

?>