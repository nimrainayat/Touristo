<?php 
// DB credentials.
define('DB_HOST','touristo-server.mysql.database.azure.com');
define('DB_USER','ylfdkynmxd@touristo-server.mysql.database.azure.com');
define('DB_PASS','pfFm$U5Gz7MoncYY');
define('DB_NAME','touristo-database');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
