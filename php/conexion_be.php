<?php

define('DB_HOST','bd-pruebasdesoftware.database.windows.net');
define('DB_USER','master');
define('DB_PASS','Somoskudasai17');
define('DB_NAME','bd_Electronica');

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
    PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false, // Puedes configurar esto según tus necesidades de seguridad.
    'ssl_version' => 'TLSv1.2' // Especifica la versión de TLS aquí
);
try{
    $connect = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS, $options);
    echo "Conexión exitosa";
}
catch(PDOException $e){
    exit("Error: " . $e->getMessage());
}



?>
