
<?php
//Información de la base de datosy el servidor
$user = "postgres";
$pass = "root";
$db = "decameron";

$server = "127.0.0.1";
$port = "5432";

//Prueba de conexión
try {
    $con = new PDO("pgsql:host=$server;port=$port;dbname=$db", $user, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Se logro conectar";
} catch (Exception $e) {
    echo "No se puedo conectar: " . $e->getMessage();
}