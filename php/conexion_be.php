<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','php_insertarpdo');

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
    PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false, // Puedes configurar esto según tus necesidades de seguridad.
    'ssl_version' => 'TLSv1.2' // Especifica la versión de TLS aquí
);

$connect = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS, $options);

?>
