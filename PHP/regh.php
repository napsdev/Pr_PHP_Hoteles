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



//Querys
$Query = $con->prepare("INSERT INTO habitaciones(id_hotel, tipo_habitacion) VALUES ((SELECT id FROM hoteles WHERE nombre=?), ?);");
try {
    $Res = $Query->execute([$ho,$ti]);
} catch (PDOException $e) {
    echo "<script>
    alert('Algo salio mal!');
    window.location.href='../VIEW/Inicio.html';
    </script>";
}

//Resultado de las querys
if ($Res === true) {
	echo "<script>
    alert('Registrado exitosamente');
    window.location.href='../VIEW/Inicio.html';
    </script>";
} else {
    echo "<script>
    alert('Algo salio mal! Vuelve a intentarlo.');
    window.location.href='../VIEW/Inicio.html';
    </script>";
}