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
$Res = $Query->execute([$name, $city, $ad, $nit, $nh]);

//Resultado de las querys
if ($Res === true) {
	header("Location: ../VIEW/inicio.html");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}