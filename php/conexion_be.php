<?php

define('DB_HOST', 'pruebas-de-software.mysql.database.azure.com');
define('DB_USER', 'master');
define('DB_PASS', 'Somoskudasai17');
define('DB_NAME', 'bd_Electronica');

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
    PDO::MYSQL_ATTR_SSL_CA => '/ssl/DigiCertGlobalRootG2.crt.pem',  // Ruta al archivo de certificado de CA
    PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => true,  // Verificar certificado del servidor
    'ssl_version' => 'TLSv1.2'
);

try {
    $connect = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, $options);
    echo "Conexión exitosa";
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
