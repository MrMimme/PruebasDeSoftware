<?php

/*
// Define las variables de conexión a la base de datos
$hostname = "electronicosymas.azurewebsites.net";
$username = "master";
$password = "Somoskudasai17";
$database = "bd_electronica";

// Realiza la conexión a la base de datos
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, "../ssl/DigiCertGlobalRootG2.crt.pem", NULL, NULL);
mysqli_real_connect($conn, $hostname, $username, $password, $database, 3306, MYSQLI_CLIENT_SSL) or die("Error al conectar" . mysqli_error($conn));

// Comprueba si la conexión es correcta
if (!$conn) {
  die("Error al conectarse a la base de datos: " . mysqli_connect_error());
}

// Cierra la conexión a la base de datos
mysqli_close($conn);
*/


$conexion=mysqli_init();
mysqli_ssl_set($conexion,NULL,NULL,"../ssl/BaltimoreCyberTrustRoot.crt.pem",NULL,NULL);
mysqli_real_connect($conexion, "electronicosymas.azurewebsites.net","master","Somoskudasai17","bd_electronica",3306,
      MYSQLI_CLIENT_SSL) or die ("Error al conectar" . mysqli_error($conexion));


/*
$conexion=mysqli_connect("localhost","root","","bd_electronica");  
    mysqli_set_charset($conexion, "utf8");
*/

?>


