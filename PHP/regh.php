<?php
//Confirmar datos enviados correctamente
if (!isset($_POST["ti"]) || !isset($_POST["ho"])) {
    exit();
}

//Archivo de conexion DB
include_once "Conexion.php";

//Datos correctos ->
$ti = $_POST["ti"];
$ho = $_POST["ho"];

//Limitacion de registros segun hotel
$Query = $con->query("select n_habitaciones from hoteles where nombre='".$ho."'");
$n1 = $Query->fetchColumn();

$Query = $con->query("SELECT COUNT(*) FROM habitaciones WHERE id_hotel=(SELECT id FROM hoteles WHERE nombre='".$ho."');");
$n2 =  $Query->fetchColumn();
$n2++;


if ($n1 >= $n2) {
    //Querys
    $Query = $con->prepare("INSERT INTO habitaciones(id_hotel, tipo_habitacion) VALUES ((SELECT id FROM hoteles WHERE nombre=?), ?);");
    try {
        $Res = $Query->execute([$ho,$ti]);
    } catch (PDOException $e) {
        echo "<script>
        alert('Algo salio mal!');
        window.location.href='../VIEW/Inicio.php';
        </script>";
    }

    //Resultado de las querys
    if ($Res === true) {
        echo "<script>
        alert('Registrado exitosamente');
        window.location.href='../VIEW/Inicio.php';
        </script>";
    } else {
        echo "<script>
        alert('Algo salio mal! Vuelve a intentarlo.');
        window.location.href='../VIEW/Inicio.php';
        </script>";
    }
} else {
    echo "<script>
        alert('Cantidad maxima de habitaciones.');
        window.location.href='../VIEW/Inicio.php';
        </script>";
}

