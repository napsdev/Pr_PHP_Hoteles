<?php
//Confirmar datos enviados correctamente
if (!isset($_POST["name"]) || !isset($_POST["city"]) || !isset($_POST["ad"]) || !isset($_POST["nit"]) || !isset($_POST["nh"])) {
    exit();
}

//Archivo de conexion DB
include_once "Conexion.php";

//Datos correctos ->
$name = $_POST["name"];
$city = $_POST["city"];
$ad = $_POST["ad"];
$nit = $_POST["nit"];
$nh = $_POST["nh"];

//Querys
$Query = $con->prepare("INSERT INTO hoteles(nombre, ciudad, direccion, nit, n_habitaciones) VALUES (?, ?, ?, ?, ?);");
try {
    $Res = $Query->execute([$name, $city, $ad, $nit, $nh]);
} catch (PDOException $e) {
    echo "<script>
    alert('Algo salio mal! Nombre de hotel repetido.');
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